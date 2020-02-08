<?php

function cetakBiodata(){
 
	$biodata = array(
        'name' => 'Citra Kemurnian Lombu',
        'age' => '24',
		'address' => 'Jalan Cidangiang 2 Nomor 29 RT 2 RW 8 Kelurahan Tegallega Bogor Tengah Kota Bogor',
    
		'hobbies' => ['Futsal','Listening To Music','Playing Guitar'],
		'is_married' => false,
		'school' => array('University' => 'Universitas Pakuan','Year In' => '2015','Year Out' => '2020','Major' => 'Computer Science'),
    
		'skills' => [
			array('id' => 0, 'skill' => 'PHP','level' => 'Beginner'),
			array('id' => 1, 'skill' => 'Framework CI','level' => 'Beginner'),
			array('id' => 2, 'skill' => 'Framework Laravel','level' => 'Beginner')
        ],
        
        'interest_in_coding' => true,
	);

	return json_encode([$biodata]);
}


echo cetakBiodata();