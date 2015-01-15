<?php 
class SiteController extends BaseController {
	public function halo() {
		//load view seperti $this->load->view pada CI
		return View::make('halo');
	}
}
?>