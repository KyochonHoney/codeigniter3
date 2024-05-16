<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require APPPATH . 'libraries/RestController.php'; 
use chriskacerguis\RestServer\RestController;

class ApiEmployeeController extends RestController
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('EmployeeModel');
    }
    //전체목록 읽기
    public function index_get()
    {
        $employee = new EmployeeModel();
        $result_emp = $employee->get_employee();
        $this->response($result_emp, 200);
    }
    //새로운 값 넣기
    public function storeEmployee_post()
    {
        $employee = new EmployeeModel();
        $data = [
            'first_name' => $this->input->post('first_name'),
            'last_name' => $this->input->post('last_name'),
            'phone' => $this->input->post('phone'),
            'email' => $this->input->post('email'),
        ];
        $result = $employee->insertEmployee($data);
    
        if($result > 0)
        {
            $this->response([
                'status' => true,
                'message' => 'NEW EMPLOYEE CREATED'
            ], RestController::HTTP_OK);
        }
        else
        {
            $this->response([
                'status' => false,
                'message' => 'NEW EMPLOYEE CAN\'T CREATED'
            ], RestController::HTTP_BAD_REQUEST);
        }
    }
    //값 하나만 끌고 오기
    public function findEmployee_get($id)
    {
        $employee = new EmployeeModel();
        $result = $employee->editEmployee($id);
        $this->response($result, 200);
    }
    //값 삭제
    public function deleteEmployee_delete($id)
    {
        $employee = new EmployeeModel();
        $result = $employee->deleteEmployee($id);
        
        if($result > 0)
        {
            $this->response([
                'status' => true,
                'message' => 'COMPLETE DELETE DATA'
            ], RestController::HTTP_OK);
        }
        else
        {
            $this->response([
                'status' => false,
                'message' => 'CANNOT DELETE DATA'
            ], RestController::HTTP_BAD_REQUEST);
        }
    }
    //값 업데이트
    public function updateEmployee_put($id)
    {
        $employee = new EmployeeModel();
        $data = [
            'first_name' => $this->put('first_name'),
            'last_name' => $this->put('last_name'),
            'phone' => $this->put('phone'),
            'email' => $this->put('email'),
        ];
        $result = $employee->updateEmployee($data, $id);
    
        if($result > 0)
        {
            $this->response([
                'status' => true,
                'message' => 'NEW EMPLOYEE UPDATED'
            ], RestController::HTTP_OK);
        }
        else
        {
            $this->response([
                'status' => false,
                'message' => 'NEW EMPLOYEE CAN\'T UPDATED'
            ], RestController::HTTP_BAD_REQUEST);
        }
    }
}

?>