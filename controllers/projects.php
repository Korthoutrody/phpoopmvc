<?php
class projects extends Controller{
	protected function Index(){
		$viewmodel = new ProjectModel();
		$this->returnView($viewmodel->Index(), true);
	}

	protected function add(){
		if(!isset($_SESSION['is_logged_in'])){
			header('Location: '.ROOT_URL.'projects');
		}
		$viewmodel = new ProjectModel();
		$this->returnView($viewmodel->add(), true);
	}

	protected function edit(){
		if(!isset($_SESSION['is_logged_in'])){
			header('Location: '.ROOT_URL.'projects');
		}
		$viewmodel = new ProjectModel();
		$this->returnView($viewmodel->edit(), true);
	}

	protected function delete(){
		if(!isset($_SESSION['is_logged_in'])){
			header('Location: '.ROOT_URL.'projects');
		}
		$viewmodel = new ProjectModel();
		$this->returnView($viewmodel->delete(), true);
	}
}