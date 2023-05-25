<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller {

	
	public function index()
	{
        $agent_query = $this->crud->fetch_all('agent');
        $data['agent'] = $agent_query->result();

        $social_query = $this->crud->fetch_all('socials');
        $data['socials'] = $social_query->result();

        $wesite_query = $this->crud->fetch_all('knew_by_website');
        $data['website'] = $wesite_query->result();

        $other_query = $this->crud->fetch_all('knew_by_other');
        $data['other'] = $other_query->result();
        $this->load->view('customer/customer_registration',$data);
	}

        public function add_other_source(){

          $other_source = $this->input->post('other_source');
          date_default_timezone_set('Asia/Kolkata'); 
          $date = date('Y-m-d H:i:s');
          $record = [
                'knew_by_other_name' => $other_source,
                'created_date' =>$date
          ];
         $id=  $this->crud->insert('knew_by_other',$record);
          echo json_encode($id);
        }



        public function customer_registration(){

                $this->form_validation->set_rules('customer_name', 'Name', 'required');
                $this->form_validation->set_rules('email', 'Email', 'required|valid_email');
                $this->form_validation->set_rules('phone', 'Mobile number', 'required');
                
                        // Check if form validation passed
                if($this->form_validation->run() == FALSE) {
                        $response['success'] = false;
                        $response['errors'] = validation_errors();
                        echo json_encode($response);
                        return;
                }else{

                        date_default_timezone_set('Asia/Kolkata'); 
                        $date = date('Y-m-d H:i:s'); 
                        $is_empty_query= $this->db->query('select exists(select 1 from customer_registration) AS Output')->row();
                        $is_empty = $is_empty_query->Output;
                
                        if($is_empty == 0){
                
                            $customer_id = 'CUS0000001';
                
                        }else{
                
                            $last_id_query= $this->db->query('SELECT customer_id FROM customer_registration ORDER BY cust_id DESC LIMIT 1;')->row();
                            $last_id = $last_id_query->customer_id;
                
                            $customer_id = ++$last_id;
                        }
                        if($this->input->post('social')){
                                  $social = substr(implode(', ', $this->input->post('social')), 0);	
                        }else{
                                 $social = NULL;
                        }
                        if($this->input->post('website')){
                                $website = substr(implode(', ', $this->input->post('website')), 0);	
                        }else{
                                $website = NULL;
                        }
                        if($this->input->post('other')){
                                $other = substr(implode(', ', $this->input->post('other')), 0);	
                        }else{
                                $other = NULL;
                        }
                
                        $cust_record = [
                            "customer_id" => $customer_id,
                            "name" => $this->input->post(('customer_name')),
                            "number" => $this->input->post(('phone')),
                            "email_id" => $this->input->post(('email')),
                            "socials_id" => $social,
                            "knew_by_website_id" => $website,
                            "knew_by_other_id" => $other,
                            "agent_id" => $this->input->post(('agent')),
                            "date" => $date,         
                        ];

                      $is_insert =  $this->crud->insert('customer_registration', $cust_record);
                      if($is_insert){
                        $current_customer = [ 
                           "customer_id" => $customer_id,
                           "customer_name" => $this->input->post(('customer_name')),
                           "customer_number" => $this->input->post(('phone')),
                           "customer_email_id" => $this->input->post(('email')),
                         ];
                         $this->session->set_userdata($current_customer);

                      }
                      $response['success'] = true;
                      echo json_encode($response);
                      return;
                }
        }

        public function customer_item(){

                $item_query = $this->crud->fetch_all_with_limit('item',4);
                $data['item'] = $item_query->result();
                $this->load->view('customer/customer_item',$data);
        }

    
// end of controller
}
