<?php
$pdf = new Pdf('P', 'mm', 'A4', true, 'UTF-8', false);
$pdf->SetTitle('Daftar Admin');
$pdf->SetTopMargin(20);
$pdf->setFooterMargin(20);
$pdf->SetAutoPageBreak(true);
$pdf->SetAuthor('Author');
$pdf->SetDisplayMode('real', 'default');
$pdf->AddPage();
$i = 0;
$html = '<h3>Daftar Admin</h3>
                    <table cellspacing="1" bgcolor="#666666" cellpadding="2">
                        <tr bgcolor="#ffffff">
                            <th width="5%" align="center">No</th>
                            <th width="5%" align="center">ID</th>
                            <th width="25%" align="center">Nama Lengkap</th>
                            <th width="15%" align="center">NIP</th>
                            <th width="20%" align="center">Alamat</th>
                            <th width="20%" align="center">Email</th>
                        </tr>';
foreach ($user as $data) {
    $i++;
    $html .= '<tr bgcolor="#ffffff">
                            <td align="center">' . $i . '</td>
                            <td>' . $data->id . '</td>
                            <td>' . $data->nama . '</td>
                            <td>' . $data->nik . '</td>
                            <td>' . $data->alamat . '</td>
                            <td>' . $data->email . '</td>
                        </tr>';
}
$html .= '</table>';
$pdf->writeHTML($html, true, false, true, false, '');
$pdf->Output('daftar-admin.pdf', 'I');
