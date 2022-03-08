<?php 
namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\PesananModel;
use App\Models\DetailModel;

class LaporanController extends Controller{

    /**
     * instance of the main Request object.
     * 
     * @var HTTP\IncomingRequest
     */
    protected $request;

    function __construct()
    {
        $this->laporan = new PesananModel();
        $this->detail = new DetailModel();
    }

    public function tampil()
    {
        $data ['laporan']= $this->laporan->findAll();
        $data ['detail']= $this->detail->findAll();
        return view('laporan', $data);
    }
    
}