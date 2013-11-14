<?php defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Example
 *
 * This is an example of a few basic user interaction methods you could use
 * all done with a hardcoded array.
 *
 * @package		CodeIgniter
 * @subpackage	Rest Server
 * @category	Controller
 * @author		Phil Sturgeon
 * @link		http://philsturgeon.co.uk/code/
*/

// This can be removed if you use __autoload() in config.php OR use Modular Extensions
require APPPATH.'/libraries/REST_Controller.php';

class Search extends REST_Controller
{
	function bukus_get()
    {
        $this->load->model('sql_model');
        $buku = $this->sql_model->dataBuku();
    	
        if($buku)
        {
            $this->response($buku, 200); // 200 being the HTTP response code
        }

        else
        {
            $this->response(array('error' => 'Buku could not be found'), 404);
        }
    }

    function buku_get()
    {
        $this->load->model('sql_model');

        if(!$this->get('id'))
        {
            $this->response(NULL, 400);
        }

        $buku = $this->sql_model->dataBuku();

        $hasil = @$buku[($this->get('id'))-1];
        
        if($hasil)
        {
            $this->response($hasil, 200); // 200 being the HTTP response code
        }

        else
        {
            $this->response(array('error' => 'Buku could not be found'), 404);
        }
    }

    function korans_get()
    {
        $this->load->model('xml_model');
        
        $koran = $this->xml_model->daftarKoran();
        
        if($koran)
        {
            $this->response($koran, 200); // 200 being the HTTP response code
        }

        else
        {
            $this->response(array('error' => 'Couldn\'t find any koran!'), 404);
        }
    }

    function koran_get()
    {
        $this->load->model('xml_model');

        if(!$this->get('id'))
        {
            $this->response(NULL, 400);
        }

        $koran = $this->xml_model->daftarKoran();

        $hasil = @$koran[($this->get('id'))-1];
        
        if($hasil)
        {
            $this->response($hasil, 200); // 200 being the HTTP response code
        }

        else
        {
            $this->response(array('error' => 'Couldn\'t find any koran!'), 404);
        }
    }

    function majalahs_get()
    {
        $this->load->model('csv_model');
        
        $majalah = $this->csv_model->daftarMajalah();
        
        if($majalah)
        {
            $this->response($majalah, 200); // 200 being the HTTP response code
        }

        else
        {
            $this->response(array('error' => 'Couldn\'t find any majalah!'), 404);
        }
    }

    function majalah_get()
    {
        $this->load->model('csv_model');

        if(!$this->get('id'))
        {
            $this->response(NULL, 400);
        }
        
        $majalah = $this->csv_model->daftarMajalah();
        
        $hasil = @$majalah[($this->get('id'))-1];

        if($hasil)
        {
            $this->response($hasil, 200); // 200 being the HTTP response code
        }

        else
        {
            $this->response(array('error' => 'Couldn\'t find any majalah!'), 404);
        }
    }
}