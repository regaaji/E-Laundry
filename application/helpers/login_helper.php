<?php

function is_logged_in()
{
    $ci = get_instance();
    if (!$ci->session->userdata('email')) {
        redirect('admin/auth');
    } else {
        $role_id = $ci->session->userdata('role_id');
        //var_dump($role_id);
        $menu = $ci->uri->segment(2);

        $queryMenu = $ci->db->get_where('user_menu', ['menu' => $menu])->row_array();

        $menu_id = $queryMenu['id'];
        //var_dump($menu_id);
        //die;
        $userAccess = $ci->db->get_where('user_access_menu', [
            'role_id' => $role_id,
            'menu_id' => $menu_id
        ]);

        

        if ($userAccess->num_rows() < 1) {
            redirect('admin/auth/blocked');
        }
    }
}
