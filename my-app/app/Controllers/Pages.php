<?php

namespace App\Controllers;
use CodeIgniter\Exceptions\PageNotFoundException;

class Pages extends BaseController
 {
    public function index()
 {
        return view( 'index' );
    }

    public function view( $page = 'index' )
 {
        if ( ! is_file( APPPATH . 'Views/pages/' . $page . '.php' ) ) {
            // Whoops, we don't have a page for that!
            if (! is_file(APPPATH . 'Views/' . $page . '.php')) {
                throw new PageNotFoundException($page);
            } else {
                return view($page);
            }
            
        } else {
            $data['title'] = ucfirst($page); // Capitalize the first letter

            return view('templates/header', $data)
                . view('pages/' . $page)
                . view('templates/footer' );
        }

    }
}