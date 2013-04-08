<?php
	if(!defined('BASEPATH')) exit('no direct script allow !');
	
	class Layout {
		
		private $obj;
		private $layout_view;
		private $title = '';
		private $css_list = array(), $js_list = array();
		private $block_list, $block_new, $block_replace = false;
		
		
		function Layout() {
			$this->obj =& get_instance();
			$this->layout_view = "layout/default.php";
			if(isset($this->obj->layout_view)) $this->layout_view = $this->obj->layout_view;
		}
		
		function view($view, $data = null, $return = false) {
			$data['content_for_layout'] = $this->obj->load->view($view, $data, true);
			$data['title_for_layout'] = $this->title;
			
			$data['js_for_layout'] = '';
			foreach ($this->js_list as $v) {
				$data['js_for_layout'] .= sprintf('<script type="text/javascript" src="%s"></script>', $v);
			}
			
			foreach ($this->css_list as $v) {
				$data['css_for_layout'] .= sprintf('<script rel="stylesheet" type="text/css" href="%s"></script>', $v);
			}
			
			$this->block_replace = true;
			$output = $this->obj->load->view($this->layout_view, $data, $return);
			
			return $output;
		}
		
		function title($title) {
			$this->title = $title;	
			 
		}
		
		function js($item) {
			$this->js_list[] = $item;
		}
		
		function css($item) {
			$this->css_list[] = $item;
		}
		
		function get_js() {
			
			return $this->js_list;
		}
		
		function get_css() {
			return $this->css_list;	
		}
		
		function block($name = '') {
			if($name = '') {
				$this->block_new = $name;
			}
			else
			{
				if($this->block_replace) {
					if(!empty($this->block_list[$this->block_new])) {
						ob_end_clean();
						echo $this->block_list[$this->block_new];
					}
				}
				else {
					$this->block_list[$this->block_new] = ob_get_clean();
				}
			}
		}
		
		
	}