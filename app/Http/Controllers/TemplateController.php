<?php

namespace App\Http\Controllers;

use App\Models\Laporan;
use App\Models\SuratKeteranganDomisiliUsaha;
use Barryvdh\DomPDF\Facade\Pdf;

class TemplateController extends Controller
{
    public function surat_keterangan()
    {
        $data = [
            'name' => 'John Doe',
            'gender' => 'Laki-laki',
            'birthdate' => 'Bandar Lampung, 1 Januari 1990',
            'job' => 'Mahasiswa',
            'address' => 'Jl. Imam Bonjol No. 10',
            'date' => date('d F Y')
        ];

        // Generate PDF with the correct facade usage
        $pdf = Pdf::loadView('surat.surat-keterangan', $data);

        // To stream the PDF in the browser
        return $pdf->stream('surat_keterangan.pdf');
    }

    public function surat_keterangan_belum_menikah()
    {
        $data = [
            'name' => 'John Doe',
            'gender' => 'Laki-laki',
            'birthdate' => 'Bandar Lampung, 1 Januari 1990',
            'job' => 'Mahasiswa',
            'address' => 'Jl. Imam Bonjol No. 10',
            'date' => date('d F Y')
        ];

        // Generate PDF with the correct facade usage
        $pdf = Pdf::loadView('surat.surat-keterangan-belum-menikah', $data);

        // To stream the PDF in the browser
        return $pdf->stream('surat_keterangan_belum_menikah.pdf');
    }

    public function surat_keterangan_bersih_diri()
    {
        $data = [
            'bapak_name' => 'John Doe',
            'bapak_job' => 'Mahasiswa',
            'bapak_address' => 'Jl. Imam Bonjol No. 10',
            'bapak_age' => '30',
            'bapak_religion' => 'Islam',
            'ibu_name' => 'Jane Doe',
            'ibu_job' => 'Ibu Rumah Tangga',
            'ibu_address' => 'Jl. Imam Bonjol No. 10',
            'ibu_age' => '30',
            'ibu_religion' => 'Islam',
            'anak_name' => 'John Doe Jr.',
            'anak_job' => 'Pelajar',
            'anak_address' => 'Jl. Imam Bonjol No. 10',
            'anak_age' => '10',
            'anak_religion' => 'Islam',
            'date' => date('d F Y')
        ];

        // Generate PDF with the correct facade usage
        $pdf = Pdf::loadView('surat.surat-keterangan-bersih-diri', $data);

        // To stream the PDF in the browser
        return $pdf->stream('surat_keterangan_bersih_diri.pdf');
    }

    public function surat_keterangan_domisili_tempat()
    {
        $data = SuratKeteranganDomisiliUsaha::find(1);

        // Generate PDF with the correct facade usage
        $pdf = Pdf::loadView('surat.surat-keterangan-domisili-tempat', ['dataArray' => $data]);

        // To stream the PDF in the browser
        return $pdf->stream('surat_keterangan_domisili-tempat.pdf');
    }

    public function testLaporan()
    {
        $data = Laporan::find(2);

        // Generate PDF with the correct facade usage
        $pdf = Pdf::loadView('surat.pengaduan', ['dataArray' => $data]);

        // To stream the PDF in the browser
        return $pdf->stream('laporan.pdf');
    }

    public function surat_keterangan_domisili()
    {
        $dataArray = [
            'nama' => 'John Doe',
            'jenis_kelamin' => 'Laki-laki',
            'tempat_lahir' => 'Bandar Lampung',
            'tanggal_lahir' => '1 Januari 1990',
            'pekerjaan' => 'Mahasiswa',
            'alamat' => 'Jl. Imam Bonjol No. 10',
            'warga_negara' => 'Indonesia',
            'agama' => 'Islam',
            'status_perkawinan' => 'Belum Menikah',
            'alamat_sesuai_kk' => 'Jl. Imam Bonjol No. 10',
            'berlaku_sampai' => '1 Januari 2022',
            'keperluan' => 'Mengurus SIM',
            'date' => date('d F Y'),
            'id' => 2
        ];

        // Generate PDF with the correct facade usage
        $pdf = Pdf::loadView('surat.surat-keterangan-domisili', ['dataArray' => $dataArray]);

        // To stream the PDF in the browser
        return $pdf->stream('surat_keterangan_domisili.pdf');
    }

    public function surat_keterangan_kelahiran()
    {
        $data = [
            'name' => 'John Doe',
            'gender' => 'Laki-laki',
            'birthdate' => 'Bandar Lampung, 1 Januari 1990',
            'job' => 'Mahasiswa',
            'address' => 'Jl. Imam Bonjol No. 10',
            'date' => date('d F Y')
        ];

        // Generate PDF with the correct facade usage
        $pdf = Pdf::loadView('surat.surat-keterangan-kelahiran', $data);

        // To stream the PDF in the browser
        return $pdf->stream('surat_keterangan_kelahiran.pdf');
    }

    public function surat_keterangan_kematian()
    {
        $data = [
            'name' => 'John Doe',
            'gender' => 'Laki-laki',
            'birthdate' => 'Bandar Lampung, 1 Januari 1990',
            'job' => 'Mahasiswa',
            'address' => 'Jl. Imam Bonjol No. 10',
            'date' => date('d F Y')
        ];

        // Generate PDF with the correct facade usage
        $pdf = Pdf::loadView('surat.surat-keterangan-kematian', $data);

        // To stream the PDF in the browser
        return $pdf->stream('surat_keterangan_kematian.pdf');
    }
 
    public function surat_keterangan_penghasilan()
    {
        $data = [
            'name' => 'John Doe',
            'gender' => 'Laki-laki',
            'birthdate' => 'Bandar Lampung, 1 Januari 1990',
            'job' => 'Mahasiswa',
            'address' => 'Jl. Imam Bonjol No. 10',
            'date' => date('d F Y')
        ];

        // Generate PDF with the correct facade usage
        $pdf = Pdf::loadView('surat.surat-keterangan-penghasilan', $data);

        // To stream the PDF in the browser
        return $pdf->stream('surat_keterangan_penghasilan.pdf');
    }

    public function surat_keterangan_skck()
    {
        $data = [
            'name' => 'John Doe',
            'gender' => 'Laki-laki',
            'birthdate' => 'Bandar Lampung, 1 Januari 1990',
            'job' => 'Mahasiswa',
            'address' => 'Jl. Imam Bonjol No. 10',
            'date' => date('d F Y')
        ];

        // Generate PDF with the correct facade usage
        $pdf = Pdf::loadView('surat.surat-keterangan-skck', $data);

        // To stream the PDF in the browser
        return $pdf->stream('surat_keterangan_skck.pdf');
    }

    public function surat_keterangan_sudah_menikah()
    {
        $data = [
            'name' => 'John Doe',
            'gender' => 'Laki-laki',
            'birthdate' => 'Bandar Lampung, 1 Januari 1990',
            'job' => 'Mahasiswa',
            'address' => 'Jl. Imam Bonjol No. 10',
            'date' => date('d F Y')
        ];

        // Generate PDF with the correct facade usage
        $pdf = Pdf::loadView('surat.surat-keterangan-sudah-menikah', $data);

        // To stream the PDF in the browser
        return $pdf->stream('surat_keterangan_sudah_menikah.pdf');
    }

    public function surat_keterangan_tidak_mampu()
    {
        $data = [
            'name' => 'John Doe',
            'gender' => 'Laki-laki',
            'birthdate' => 'Bandar Lampung, 1 Januari 1990',
            'job' => 'Mahasiswa',
            'address' => 'Jl. Imam Bonjol No. 10',
            'date' => date('d F Y')
        ];

        // Generate PDF with the correct facade usage
        $pdf = Pdf::loadView('surat.surat-keterangan-tidak-mampu', $data);

        // To stream the PDF in the browser
        return $pdf->stream('surat_keterangan_tidak_mampu.pdf');
    }

    public function surat_keterangan_usaha()
    {
        $data = [
            'name' => 'John Doe',
            'gender' => 'Laki-laki',
            'birthdate' => 'Bandar Lampung, 1 Januari 1990',
            'job' => 'Mahasiswa',
            'address' => 'Jl. Imam Bonjol No. 10',
            'date' => date('d F Y')
        ];

        // Generate PDF with the correct facade usage
        $pdf = Pdf::loadView('surat.surat-keterangan-usaha', $data);

        // To stream the PDF in the browser
        return $pdf->stream('surat_keterangan_usaha.pdf');
    }

    public function surat_keterangan_pindah()
    {
        $data = [
            'name' => 'John Doe',
            'gender' => 'Laki-laki',
            'birthdate' => 'Bandar Lampung, 1 Januari 1990',
            'job' => 'Mahasiswa',
            'address' => 'Jl. Imam Bonjol No. 10',
            'date' => date('d F Y')
        ];

        // Generate PDF with the correct facade usage
        $pdf = Pdf::loadView('surat.surat-keterangan-pindah', $data);

        // To stream the PDF in the browser
        return $pdf->stream('surat_keterangan_pindah.pdf');
    }
}
