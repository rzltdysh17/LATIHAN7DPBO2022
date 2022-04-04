<?php 

class Task extends DB{
	
	// Mengambil data
	function getTask(){
		// Query mysql select data ke tb_to_do
		$query = "SELECT * FROM tb_to_do";

		// Mengeksekusi query
		return $this->execute($query);
	}

	// Menambahkan Data Tugas
	function addTask(){
		// Tampung Semua Variabel
		$name = $_POST['tname'];
		$details = $_POST['tdetails'];
		$subject = $_POST['tsubject'];
		$priority = $_POST['tpriority'];
		$deadline = $_POST['tdeadline'];

		// Query MySQL Insert Data ke tb_to_do
		$query = "INSERT INTO tb_to_do (name_td, details_td, subject_td, priority_td, deadline_td, status_td) 
				  VALUES ('$name', '$details', '$subject', '$priority', '$deadline', 'Belum')";
		
		// Mengeksekusi query
		return $this->execute($query);
	}
	
	// Menghapus Data Tugas
	function delTask($id){
		// Query MySQL Delete Data ke tb_to_do
		$query = "DELETE FROM tb_to_do WHERE id = '$id'";

		// Mengeksekusi query
		return $this->execute($query);
	}

	// Mengubah Data Tugas menjadi selesai
	function upTask($id){
		// Query MySQL Update Status menjadi 'Sudah'
		$query = "UPDATE tb_to_do SET status_td = 'Sudah' WHERE id = '$id'";

		// Mengeksekusi query
		return $this->execute($query);
	}

	// Sorting Data Tugas
	function sortTask($key){
		// Query MySQL Sorting Data Ascending
		$query = "SELECT * FROM tb_to_do ORDER BY $key ASC";

		// Mengeksekusi query
		return $this->execute($query);
	}
}

?>