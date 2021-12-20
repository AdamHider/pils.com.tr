<?php
class ControllerExtensionModuleDistributorsMap extends Controller {
	public function index() {
		static $module = 0;
		$this->load->language('extension/module/distributors_map');

		$this->load->model('design/banner');
		$this->load->model('tool/image');

		$this->document->addScript('catalog/view/javascript/svg_map/world.config.js');
		$this->document->addScript('catalog/view/javascript/svg_map/tr.config.js');

		$this->document->addScript('catalog/view/javascript/svg/svg.min.js');
		$this->document->addScript('catalog/view/javascript/svg/svg.panzoom.min.js');
		$this->document->addScript('catalog/view/javascript/svg/popper.min.js');
		//$this->document->addScript('catalog/view/javascript/svg/polyfillsIE.js');


		$this->document->setTitle($this->language->get('heading_title'));

		$data = array();

		$data['breadcrumbs'] = array();

		$data['breadcrumbs'][] = array(
			'text' => $this->language->get('text_home'),
			'href' => $this->url->link('common/home')
		);

		$data['breadcrumbs'][] = array(
			'text' => $this->language->get('heading_title'),
			'href' => $this->url->link('product/compare')
		);

		$data['column_left'] = $this->load->controller('common/column_left');
		$data['column_right'] = $this->load->controller('common/column_right');
		$data['content_top'] = $this->load->controller('common/content_top');
		$data['content_bottom'] = $this->load->controller('common/content_bottom');
		$data['footer'] = $this->load->controller('common/footer');
		$data['header'] = $this->load->controller('common/header');

		$data['mode'] = 'tr';
		$data['all_mode'] = true;
		
		if(!empty($this->request->get['m'])){
			$data['mode'] = $this->request->get['m'];
			$data['all_mode'] = false;
		}
		$data['text_location'] = $this->language->get('map_header_'.$data['mode']);

		$this->response->setOutput($this->load->view('extension/module/distributors_map', $data));

	}
}