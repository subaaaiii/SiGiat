<?php 
function is_logged_in()
{
    $ci = get_instance(); 
    // $ci sebagai ganti this, harus di instance dulu dari ci, karena helper tidak mengenal $this
    if(!$ci->session->userdata('email')){
        redirect('auth');
    }else{
        $role_id =$ci->session->userdata('role_id');
        $menu = $ci->uri->segment(1);//segment 1 untuk localhost/login/(menu/user/admin)

        $querymenu = $ci->db->get_where('user_menu', ['menu' => $menu])->row_array();
        $menu_id = $querymenu['id'];

        $userAccess= $ci->db->get_where('user_access_menu', [
            'role_id' => $role_id, 
            'menu_id' => $menu_id
        ]);

        if($userAccess->num_rows()<1){
            redirect('auth/blocked');
        }
    }
}

function check_access($role_id, $menu_id){
    $ci=get_instance();

    $ci->db->where('role_id', $role_id);
    $ci->db->where('menu_id', $menu_id);
    $result = $ci->db->get('user_access_menu');

    if($result->num_rows()>0){
        return "checked='checked'";
    }
}

if (!function_exists('format_event_description')) {
    function format_event_description($description, $eventId, $limit = 80)
    {
        // Tambahkan tag <br> untuk setiap baris baru
        $formatted_description = nl2br($description);

        // Temukan tag [icon] dan [end-icon] dan ganti dengan tag HTML yang sesuai
        $formatted_description = str_replace('[icon]', '<i class="your-icon-class">', $formatted_description);
        $formatted_description = str_replace('[end-icon]', '</i>', $formatted_description);

        // Batasi jumlah kata pada deskripsi
        $words = str_word_count(strip_tags($description), 2);
        $limited_description = implode(' ', array_slice($words, 0, $limit));

        // Tambahkan tombol "Lihat Deskripsi" jika deskripsi lebih panjang dari batas
        if (str_word_count(strip_tags($description)) > $limit) {
            $formatted_description = $limited_description . '... <a href="#" onclick="toggleDescription(' . $eventId . ')"></a>';
        }

        return $formatted_description;
    }
}

if (!function_exists('format_event_description2')) {
    function format_event_description2($description, $eventId, $limit = 200)
    {
        // Tambahkan tag <br> untuk setiap baris baru
        $formatted_description = nl2br($description);

        // Temukan tag [icon] dan [end-icon] dan ganti dengan tag HTML yang sesuai
        $formatted_description = str_replace('[icon]', '<i class="your-icon-class">', $formatted_description);
        $formatted_description = str_replace('[end-icon]', '</i>', $formatted_description);

        // Batasi jumlah kata pada deskripsi
        $words = str_word_count(strip_tags($description), 2);
        $limited_description = implode(' ', array_slice($words, 0, $limit));

        // Tambahkan tombol "Lihat Deskripsi" jika deskripsi lebih panjang dari batas
        if (str_word_count(strip_tags($description)) > $limit) {
            $formatted_description = $limited_description . '... <a href="#" onclick="toggleDescription(' . $eventId . ')"></a>';
        }

        return $formatted_description;
    }
}
?>