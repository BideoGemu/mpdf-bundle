# BideoGemu - mPDF Bundle

Pdf generator for Symfony.
From [Sasedev - mPDF Bundle](https://github.com/sasedev/mpdf-bundle)

## What is it?

This is a Symfony Pdf Factory for use inside a controller to generate a PDF file from twig rendering using MPDF lib.

## Installation

### Step 1: Download the bundle using composer
```bash
$ composer require bideogemu/mpdf-bundle
```
Composer will install the bundle to your project's vendor directory.

### Step 2: Enable the bundle
Enable the bundle in the config if flex it didn't do it for you:
```php
<?php
// config/bundles.php

return [
    // ...
    BideoGemu\MpdfBundle\BideoGemuMpdfBundle::class => ['all' => true],
    // ...
];
```

## Usage

You can use the factory in your controllers just like this:
```php
<?php

use BideoGemu\MpdfBundle\Factory\MpdfFactory;

// ...
public function pdf($id, Request $request, MpdfFactory $MpdfFactory) {
// ...
$mPdf = $MpdfFactory->createMpdfObject([
'mode' => 'utf-8',
'format' => 'A4',
'margin_header' => 5,
'margin_footer' => 5,
'orientation' => 'P'
]);
$mPdf->SetTopMargin("50");
$mPdf->SetHTMLHeader($this->renderView('twigfolder/pdf/pdf_header.html.twig', $TwigVars));
$mPdf->SetFooter($this->renderView('twigfolder/pdf/pdf_footer.html.twig', $TwigVars));
$mPdf->WriteHTML($this->renderView('twigfolder/pdf/pdf_content.html.twig', $TwigVars));
return $MpdfFactory->createDownloadResponse($mPdf, "file.pdf");
}
// ...
```

## Reporting an issue or a feature request
Feel free to report any issues. If you have an idea to make it better go ahead and modify and submit pull requests.
