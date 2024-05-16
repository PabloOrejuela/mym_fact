<?php

namespace App\Controllers;

use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx as XlsxWriter;
use PhpOffice\PhpSpreadsheet\Reader\Xlsx as XlsxReader;

class FacturacionElectronica extends BaseController {

    public function index(): string {
        
		//$this->folder = base_url().'uploads/';
		$this->folder = 'uploads/';
		$this->folder_path= 'uploads';

        $cambio['fecha'] = '26-08-2016';
		$cambio['titulo'] = 'Notas de crédito';
		$cambio['descripcion'] = 'Lectura de notas de crédito junto con las facturas, ademas esto incluye una nueva columna (Nota de crédito) que indica, si una factura ha sido afetada por una nota de crédito'; 
		$data['cambios'][0] = $cambio;

		$cambio['fecha'] = '26-08-2016';
		$cambio['titulo'] = 'Seguro Campecino';
		$cambio['descripcion'] = 'Nueva fila en el informe (Seguro campecino), se mantendrá en 0.00 en caso de que la factura no presente este atributo adicional'; 
		$data['cambios'][1] = $cambio;

		$cambio['fecha'] = '26-08-2016';
		$cambio['titulo'] = 'Impuesto Redimible a las Botellas Plásticas no retornables (IRBPNR)';
		$cambio['descripcion'] = 'Nueva columna agregada, este impuesto unicamente se calculará cuando la factura cuente con este atributo'; 
		$data['cambios'][2] = $cambio;

		$cambio['fecha'] = '15-05-2024';
		$cambio['titulo'] = 'IVA 15%';
		$cambio['descripcion'] = 'Se implementó el IVA de 15%'; 
		$data['cambios'][3] = $cambio;
		
		$data['main_content'] = 'facturacion_electronica/form_generar_informe';
		return view('includes/template', $data);
    }
}
