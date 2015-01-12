<?php

App::uses('AppModel', 'Model');

class Comment extends AppModel {

	public $hasAndBelongsToMany = array(
		'User' => array(
		  'joinTable' => 'comment_users',
		  ),
		'Establishment' => array(
		  'joinTable' => 'comment_establishments',
		  )
		);

	function saveCommentUserOrCommentEstablishment($data){

		$db = $this->getDataSource();
		$db->begin();

		try{

		if ($this->save($data)) {
			$data['CommentUser']['comment_id'] = $data['CommentEstablishment']['comment_id'] = $this->id;
			$db_save = true;
		}
		
		if ($data['CommentEstablishment']['establishment_id'] && !$this->CommentEstablishment->save($data)) {
			$db_save = false;
			throw new Exception("data invalid CommentEstablishment");
			
		}

		if ($data['CommentUser']['user_id'] && !$this->CommentUser->save($data)) {
			throw new Exception("data invalid CommentUser");
			
			$db_save = false;
		}

		if ($db_save) {
			
			$db->commit();
			return true;
		}

		} catch (Exception $e){

			$this->log("\n\nModel -> Comment 
						\nMethod -> saveCommentUserOrCommentEstablishment
						\n".print_r($data,true)." 
						\n".$e->getMessage() ."\n\n", "save_errors_or_exceptions");
		}

		$db->rollback();

		return false;
	}

}
