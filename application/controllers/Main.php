<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller {

	
	public function index()
	{
        $agent_query = $this->crud->fetch_all('agent');
        $data['agent'] = $agent_query->result();

        $cust_query = $this->crud->fetch_all('customer_registration');
        $data['cust'] = $cust_query->result();        

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
                            "refer_cust" => $this->input->post(('cust')),
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

                $item_query1 = $this->crud->fetch_all('item');
                $data['item1'] = $item_query1->result();
                $data['item2'] = $item_query1->result();
                $data['item3'] = $item_query1->result();


                $this->load->view('customer/customer_item',$data);
        }


        public function fetch_items(){

                $searchTerm = $this->input->post('searchTerm'); 

                $fetched_items = $this->main_model->fetch_items($searchTerm);
                echo json_encode($fetched_items); // Return the search results as JSON


        }


        public function customer_order_confirm(){

                $this->load->view('customer/customer_order_confirm');
        }



        public function email_test(){

                $this->load->view('email_test');
        }

        public function email_fun(){

                $this->load->library('email');

                $config = array(
                        'protocol' => 'smtp',
                        'smtp_host' => 'smtp.example.com',
                        'smtp_port' => 587,
                        'smtp_user' => 'your_email@example.com',
                        'smtp_pass' => 'your_email_password',
                        'mailtype' => 'html',
                        'charset' => 'utf-8'
                    );
                    $this->email->initialize($config);
                // $this->load->view('email_test');

                $this->email->from('your_email@example.com', 'Your Name');
                $this->email->to('recipient_email@example.com');
                $this->email->subject('Email Subject');
                $this->email->message('Email Message');

                if ($this->email->send()) {
                        echo 'Email sent successfully.';
                    } else {
                        echo $this->email->print_debugger();
                    }
        }



        // add agent modal


// add new location

public function add_agent_modal()
{

		$this->form_validation->set_rules('agent_name','Name','trim|required');
	

			if($this->form_validation->run()==FALSE){

				$message = array('response' =>'error', 'message' => validation_errors());

			}else{

				$name = $this->input->post('agent_name');
                                // $name = $this->input->post('location');
				// $name = $this->input->post('location');

                                $is_empty_query= $this->db->query('select exists(select 1 from agent) AS Output')->row();
                                $is_empty = $is_empty_query->Output;
                        


                                if($is_empty == 0){
                        
                                    $agent_id = 'AGN0000001';
                        
                                }else{
                        
                                    $last_id_query= $this->db->query('SELECT agent_id FROM agent ORDER BY agent_auto_id DESC LIMIT 1;')->row();
                                    $last_id = $last_id_query->agent_id;
                        
                                    $agent_id = ++$last_id;

                                }

				date_default_timezone_set('Asia/Kolkata'); # add your city to set local time zone
				$date = date('Y-m-d H:i:s');
				
				$agent_record = [
                                        "agent_id" => $agent_id,
					"agent_name" => $name,
					"date" => $date
				];

                                $id=  $this->crud->insert('agent',$agent_record);

				if($id){
				
					$message = array('response' =>'success', 'message' => 'Location added');

				}else{

					$message = array('response' =>'error', 'message' => 'Failed to add');

				}

			}

			echo json_encode($message);

		


}












    
// end of controller
}
