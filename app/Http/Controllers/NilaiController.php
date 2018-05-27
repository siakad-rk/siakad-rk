<?php

namespace App\Http\Controllers;

use Excel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Facade;
use Illuminate\Support\Facades\Auth;
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use Response;
use App\MataPelajaran;
use App\TahunAjaran;
use App\Nilai;
use App\Kelas;
use App\User;
use App\MenghuniKelas;

class NilaiController extends Controller
{
    public function getBorderStyle(){
        return $styleArray = array(
                    'borders' => array(
                        'top' => array(
                            'style' => 'thin',
                        ),
                        'left' => array(
                            'style' => 'thin',
                        ),
                        'bottom' => array(
                            'style' => 'thin',
                        ),
                        'right' => array(
                            'style' => 'thin',
                        ),
                    )
            );
    }
    public function getTextCenterStyle(){
        return $styleArray = array(
                'alignment' => array(
                    'horizontal' => 'center',
                    'vertical' => 'center',
                )
            );
    }
    public function genExcelCommunal(Request $request)
    {
        $mp = $request->mpc;
        $cat = $request->cat;
        $sems = $request->sems; 
        $bs = $this->getBorderStyle();
        $user = User::where('kode', 'SIS')->get();
        $filename = $mp . '-' . $cat . '-' . $sems . '-Komunal';
        $filepath = "\public\download\\template_nilai_komunal.xls";
        Excel::load($filepath, function($file) use($filename,$mp,$cat,$sems,$bs,$user){
            $sheet1 = $file->setActiveSheetIndex(0);
            Excel::create($filename, function($excel) use($sheet1,$mp,$cat,$sems,$bs,$user) {

                $excel->addExternalSheet($sheet1);
                $sheet1->setCellValue('C2', $mp);
                $sheet1->setCellValue('C3', $cat);
                $sheet1->setCellValue('C4', Auth::user()->name);
                $sv = explode("-", $sems);
                $sheet1->setCellValue('C5', $sv[0]);
                $sheet1->setCellValue('C6', $sv[1]);

                for($a = '1'; $a <='6'; $a++){
                    $sheet1->getStyle('A'.$a)->applyFromArray($bs);
                    $sheet1->getStyle('C'.$a)->applyFromArray($bs);
                }
                for($a = 'A'; $a <='H'; $a++){
                    $sheet1->getStyle($a.'8')->applyFromArray($bs);
                    $sheet1->getStyle($a.'9')->applyFromArray($bs);
                }
                $now = 10;
                foreach($user as $us){
                    $cast = (string)$now;
                    $sheet1->setCellValue('A'.$cast,$us->no_induk);
                    $sheet1->setCellValue('B'.$cast,$us->name);
                    for($a = 'A'; $a <='H'; $a++){
                        $sheet1->getStyle($a.$now)->applyFromArray($bs);
                    }
                    $now+=1;  
                }

            })->export('xls');
        });
    }

    public function genExcelClass(Request $request)
    {
        $mp = $request->mpc;
        $cat = $request->cat;
        $sems = $request->sems;
        $kls = $request->kls; 
        $ctr = (string)$request->ctr;
        $bs = $this->getBorderStyle();
        $user = MenghuniKelas::where('nama_kelas',$kls)->get();
        if($ctr=="Semua"){
            $filepath = "\public\download\\template_nilai_perkelas.xls";
            $filename = $mp . '-' . $cat . '-' . $sems . '-'. $kls;
            Excel::load($filepath, function($file) use($filename,$mp,$cat,$sems,$bs,$user,$kls){
            $sheet1 = $file->setActiveSheetIndex(0);
            Excel::create($filename, function($excel) use($sheet1,$mp,$cat,$sems,$bs,$user,$kls) {

                $excel->addExternalSheet($sheet1);
                $sheet1->setCellValue('C2', $mp);
                $sheet1->setCellValue('C3', $cat);
                $sheet1->setCellValue('C4', Auth::user()->name);
                $sv = explode("-", $sems);
                $sheet1->setCellValue('C5', $sv[0]);
                $sheet1->setCellValue('C6', $sv[1]);
                $sheet1->setCellValue('C7', $kls);

                for($a = '1'; $a <='7'; $a++){
                    $sheet1->getStyle('A'.$a)->applyFromArray($bs);
                    $sheet1->getStyle('C'.$a)->applyFromArray($bs);
                }
                for($a = 'A'; $a <='H'; $a++){
                    $sheet1->getStyle($a.'9')->applyFromArray($bs);
                    $sheet1->getStyle($a.'10')->applyFromArray($bs);
                }
                $now = 11;
                foreach($user as $us){
                    $cast = (string)$now;
                    $sheet1->setCellValue('A'.$cast,$us->no_induk);
                    $sheet1->setCellValue('B'.$cast,$us->users->name);
                    for($a = 'A'; $a <='H'; $a++){
                        $sheet1->getStyle($a.$now)->applyFromArray($bs);
                    }
                    $now+=1;  
                }

            })->export('xls');
        });
        }
        else{
            $tc = $this->getTextCenterStyle();
            $filepath = "\public\download\\template_nilai_perkelas_perulangan.xls";
            $filename = $mp . '-' . $cat . '-' . $sems . '-'. $kls . '-'.(string)$ctr;
            Excel::load($filepath, function($file) use($filename,$mp,$cat,$sems,$bs,$user,$kls,$ctr,$tc){
            $sheet1 = $file->setActiveSheetIndex(0);
            Excel::create($filename, function($excel) use($sheet1,$mp,$cat,$sems,$bs,$user,$kls,$ctr,$tc) {

                $excel->addExternalSheet($sheet1);
                $sheet1->setCellValue('C2', $mp);
                $sheet1->setCellValue('C3', $cat);
                $sheet1->setCellValue('C4', Auth::user()->name);
                $sv = explode("-", $sems);
                $sheet1->setCellValue('C5', $sv[0]);
                $sheet1->setCellValue('C6', $sv[1]);
                $sheet1->setCellValue('C7', $kls);
                $sheet1->setCellValue('C8', $ctr);
                
                for($a = '1'; $a <='8'; $a++){
                    $sheet1->getStyle('A'.$a)->applyFromArray($bs);
                    $sheet1->getStyle('C'.$a)->applyFromArray($bs);
                    $sheet1->getStyle('C'.$a)->applyFromArray($tc);
                }
                for($a = 'A'; $a <='C'; $a++){
                    $sheet1->getStyle($a.'10')->applyFromArray($bs);
                    $sheet1->getStyle($a.'11')->applyFromArray($bs);
                }
                $now = 12;
                foreach($user as $us){
                    $cast = (string)$now;
                    $sheet1->setCellValue('A'.$cast,$us->no_induk);
                    $sheet1->setCellValue('B'.$cast,$us->users->name);
                    for($a = 'A'; $a <='C'; $a++){
                        $sheet1->getStyle($a.$now)->applyFromArray($bs);
                    }
                    $now+=1;  
                }

            })->export('xls');
        });   
        }
        
    }
    public function showUH()
    {
        $mp = MataPelajaran::all();
        return view('nilai.uh',['mp'=>$mp]);
    }
    public function showPsiko()
    {
        $mp = MataPelajaran::all();
        return view('nilai.psikomotor',['mp'=>$mp]);
    }
    public function showAfe()
    {
        $mp = MataPelajaran::all();
        return view('nilai.afektif',['mp'=>$mp]);
    }
    public function showMidFin()
    {
        $mp = MataPelajaran::all();
        return view('nilai.check',['mp'=>$mp]);
    }
    public function showGenExcel(){
        $mp = MataPelajaran::all();
        $sem = TahunAjaran::all();
        $nilai = Nilai::all();
        $kelas = Kelas::all();
        return view('nilai.up',['mp'=>$mp , 'sem'=>$sem, 'nilai'=>$nilai, 'mps'=>$mp, 'sems'=>$sem, 'mpx'=>$mp, 'semx'=>$sem,'kelas'=>$kelas]);
    }
}
