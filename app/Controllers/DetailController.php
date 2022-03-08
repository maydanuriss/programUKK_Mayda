<?php 
namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\DetailModel;
use CodeIgniter\HTTP\Request;

class DetailController extends Controller{
    
    /**
     * instance of the main Request object.
     * 
     * @var HTTP\IncomingRequest
     */
    protected $request;

    function __construct()
    {
        $this->details = new DetailModel();
    }

    public function tampil()
    {
        $data ['ddetail']= $this->details->findAll();
        return view('detailList', $data);
    }
}