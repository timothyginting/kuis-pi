<?php
    require_once "koneksi.php";

    class Motor {


        //mengambil data keseluruhan
        public function get_motors()
        {
        global $mysqli;
        $query="SELECT * FROM tbl_data_motor";
        $data=array();
        $result=$mysqli->query($query);
        while($row= mysqli_fetch_object($result))
        {
            $data[]=$row;
        }
        $response=array(
        'status' => 200,
        'message' =>'Get List Data Motor Successfully.',
        'data' => $data
        );
        header('Content-Type: application/json');
        echo json_encode($response);
        }


        //function mengmbil data tunggal berdasarkan id
        public function get_motor($id)
        {
        global $mysqli;
        
        //$query="SELECT * FROM tbl_data_motor";
        if($id != 0)
        {
            $query ="SELECT * FROM tbl_data_motor WHERE id = ".$id." LIMIT 1";
            //$query." WHERE id = ".$id." LIMIT 1";
        }
        $data=array();
        $result=$mysqli->query($query);
        while($row=mysqli_fetch_object($result))
        {
            $data[]=$row;
        }
        $response=array(
        'status' => 200,
        'message' =>'Get List Data Motor Successfully.',
        'data' => $data
        );
        header('Content-Type: application/json');
        echo json_encode($response);
        }


        //function insert
        public function insert_data_motor()
        {
        global $mysqli;

        $arrcheckpost = array('id' => '', 'merek_motor' => '', 'varian_sepeda_motor' => '', 'tipe_transmisi' => '', 'harga_motor' => '');
        $hitung = count(array_intersect_key($_POST, $arrcheckpost));
        if($hitung == count($arrcheckpost)){
        $result = mysqli_query($mysqli, "INSERT INTO tbl_data_motor SET
        id = '$_POST[id]',
        merek_motor = '$_POST[merek_motor]',
        varian_sepeda_motor = '$_POST[varian_sepeda_motor]',
        tipe_transmisi = '$_POST[tipe_transmisi]',
        harga_motor = '$_POST[harga_motor]'");
            if($result)
            {
                $response=array(
                'status' => 200,
                'message' =>'Data Motor Added Successfully.'
                );
            }
            else
            {
                $response=array(
                'status' => 400,
                'message' =>'Data Motor Addition Failed.'
                );
            }
        }
        else{
            $response=array(
            'status' => 0,
            'message' =>'Parameter Do Not Match'
            );
        }
        header('Content-Type: application/json');
        echo json_encode($response);
        }

        //function update
        function update_data_motor($id)
        {
        global $mysqli;
        $arrcheckpost = array('id' => '', 'merek_motor' => '', 'varian_sepeda_motor' => '', 'tipe_transmisi' => '', 'harga_motor' => '');
        $hitung = count(array_intersect_key($_POST, $arrcheckpost));
        if($hitung == count($arrcheckpost)){
        $result = mysqli_query($mysqli, "UPDATE tbl_data_motor SET
        id = '$_POST[id]',
        merek_motor = '$_POST[merek_motor]',
        varian_sepeda_motor = '$_POST[varian_sepeda_motor]',
        tipe_transmisi = '$_POST[tipe_transmisi]',
        harga_motor = '$_POST[harga_motor]'
        WHERE id='$id'");
        if($result)
        {
            $response=array(
            'status' => 200,
            'message' =>'Data Motor Updated Successfully.'
            );
        }
        else
        {
            $response=array(
            'status' => 400,
            'message' =>'Data Motor Updation Failed.'
            );
        }
        }else{
            $response=array(
            'status' => 0,
            'message' =>'Parameter Do Not Match'
            );
        }
        header('Content-Type: application/json');
        echo json_encode($response);
        }


        //function delete
        function delete_data_motor($id)
        {
        global $mysqli;
        $query="DELETE FROM tbl_data_motor WHERE id=".$id;
        if(mysqli_query($mysqli, $query))
        {
            $response=array(
            'status' => 200,
            'message' =>'Data Motor Deleted Successfully.'
            );
        }
        else
        {
            $response=array(
            'status' => 0,
            'message' =>'Data Motor Deletion Failed.'
            );
        }
        header('Content-Type: application/json');
        echo json_encode($response);
        }

        
    }
    
    


    
?>