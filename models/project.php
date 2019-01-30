<?php
class ProjectModel extends Model{
	public function Index(){
		$this->query('SELECT * FROM projects ORDER BY create_date DESC');
		$rows = $this->resultSet();
		return $rows;
	}

	public function add(){
		$post = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

		if($post['submit']){
			if($post['title'] == '' || $post['body'] == '' || $post['image'] == '' || $post['link'] == '' || $post['link2'] == ''){
				Messages::setMsg('Alle velden invullen alstublieft. Foto werkt helaas niet zonder interne database toegang.', 'error');
				return;
			}
			$this->query('INSERT INTO projects (title, body, image, link, link2, user_id) VALUES(:title, :body, :image, :link, :link2, :user_id)');
			$this->bind(':title', $post['title']);
			$this->bind(':body', $post['body']);
			$this->bind(':image', $post['image']);
			$this->bind(':link', $post['link']);
			$this->bind(':link2', $post['link2']);
			$this->bind(':user_id', 1);
			$this->execute();
	
			if($this->lastInsertId()){
				//header('Location: '.ROOT_URL.'projects');
				echo "<script type='text/javascript'>window.top.location='http://rodykorthout.nl/projects';</script>"; exit;
				//Snelle temporary hotfix voor 'header already sent error'
			}
		}
		return;
	}

	public function edit()
	{
		$post = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

		if($post['submit']){
			$this->query('UPDATE projects SET title=:title, body=:body, image=:image,link=:link, link2=:link2, user_id=:user_id WHERE id=:id');
			$this->bind(':title', $post['title']);
			$this->bind(':body', $post['body']);
			$this->bind(':image', $post['image']);
			$this->bind(':link', $post['link']);
			$this->bind(':link2', $post['link2']);
			$this->bind(':user_id', 1);
			$this->bind(':id', $post['id']);
			$this->execute();
		}
		return;
	}

	public function delete()
	{

				header('Location: '.ROOT_URL.'projects');
	}

}