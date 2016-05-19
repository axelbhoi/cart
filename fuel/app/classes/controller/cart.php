<?php

	class Controller_Cart extends Controller{


		public function action_index()
		{
			/*
			$entry = Model_Items::find('all');

			$data = array('entry'=>$entry);		

			return View::forge('cart/index', $data);
			*/
			$config = array(
			    'pagination_url' => Uri::base().'cart/index/',
			    'total_items'    => Model_Items::count(),
			    'per_page'       => 3,
			    'uri_segment'    => 3,
			    // or if you prefer pagination by query string
			    //'uri_segment'    => 'page',
			);

			// Create a pagination instance named 'mypagination'
			$pagination = Pagination::forge('mypagination', $config);

			$data['items'] 				= DB::select('*')
			                            ->from('items')
			                            ->limit($pagination->per_page)
			                            ->offset($pagination->offset)
			                            ->execute()
			                            ->as_array();

			// we pass the object, it will be rendered when echo'd in the view
			$data['pagination'] = $pagination;


			// return the view
			return \View::forge('cart/index', $data);

		}		


	}