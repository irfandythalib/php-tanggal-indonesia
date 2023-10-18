<?php
function tanggal_indonesia()
            {
                $bulan = array(
                    1 =>   'Januari',
                    2 =>   'Februari',
                    3 =>   'Maret',
                    4 =>   'April',
                    5 =>   'Mei',
                    6 =>   'Juni',
                    7 =>   'Juli',
                    8 =>   'Agustus',
                    9 =>   'September',
                    10 =>   'Oktober',
                    11 =>   'November',
                    12 =>   'Desember'
                );

                $hari = array(
                    "Sunday" =>   'Ahad',
                    "Monday" =>   'Senin',
                    "Tuesday" =>  'Selasa',
                    "Wednesday" => 'Rabu',
                    "Thursday" =>  'Kamis',
                    "Friday" =>    'Jumat',
                    "Saturday" =>  'Sabtu'
                );

                $data = [];
                $data['tanggal'] = date('d');
                $data['bulan'] = date('m');
                $data['tahun'] = date('Y');
                $data['bulan_bahasa'] = $bulan[date('m')];
                $data['hari_bahasa'] = $hari[date('l')];
                return $data;
            }

           print_r(tanggal_indonesia());

?>
