<?php
defined ('BASEPATH') or exit ('No direct script acces allowed');
class Indek_model extends CI_Model
{
	public function get_data()
	{
		$mahasiswa = array(
			array(171240000987,'abdillah faqih', 'laki-laki',2017,'jepara')
			,array(171240000988,'ahmad syarif', 'laki-laki',2017,'kudus')
			,array(171240000989,'ummi qulsum', 'perempuan',2017,'jepara')
			,array(181240000987,'abduh somat', 'laki-laki',2018,'pati')
			,array(181240000988,'soleh mukarom', 'laki-laki',2018,'kudus')
			,array(181240000989,'siti qomariah', 'perempuan',2018,'jepara')
			,array(191240000876,'jalaludin arfahsyat', 'laki-laki',2019,'jepara')
			
		);
		return $mahasiswa;
	}
}