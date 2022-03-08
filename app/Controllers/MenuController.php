<?php 
namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\MenuModel;
use CodeIgniter\HTTP\Request;

class MenuController extends Controller{
    
    /**
     * instance of the main Request object.
     * 
     * @var HTTP\IncomingRequest
     */
    protected $request;

    function __construct()
    {
        $this->menus = new MenuModel();
    }

    public function tampil()
    {
        $data ['dmenu']= $this->menus->findAll();
        return view('menuList', $data);
    }

    public function create()
    {
        $data = array(
            'nama'=>$this->request->getPost('nama'),
            'harga'=>$this->request->getPost('harga'),
            'jenis'=>$this->request->getPost('jenis'),
            'stok'=>$this->request->getPost('stok'),
        );
        $this->menus->insert($data);
        return redirect('menu')->with('success', 'Data Berhasil disimpan');
    }

    public function delete($id)
    {
        $this->menus->delete($id);
        return redirect('menu')->with('success', 'Data Berhasil dihapus');
    }

    public function edit($id)
    {
        $data = array(
            'nama'=>$this->request->getPost('nama'),
            'harga'=>$this->request->getPost('harga'),
            'jenis'=>$this->request->getPost('jenis'),
            'stok'=>$this->request->getPost('stok'),
        );
        $this->menus->update($id,$data);
        return redirect('menu')->with('success', 'Data Berhasil diedit');
    }
}