<?php
    $tipo_contrato = $_POST['tipo_contrato'];
   

        // Incluímos a biblioteca DOMPDF
        require_once '../vendor/dompdf/autoload.inc.php';

        use Dompdf\Dompdf;

        $dompdf = new Dompdf();
        if ($tipo_contrato == 1){
            $html = file_get_contents('modelosContratos/contratoElecta.html');  
        }else{
            $html = file_get_contents('modelosContratos/contratoInfap.html');  
        }
        $dompdf->loadHtml($html);
        $dompdf->set_option('defaultFont', 'Times New Roman’');
        $dompdf->setPaper('A4', 'portrait');
        $dompdf->render();
        $dompdf->stream("contratoElecta.pdf", array("Attachment" => false));
        exit(0);



        
        ?>
