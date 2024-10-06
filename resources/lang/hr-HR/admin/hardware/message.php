<?php

return [

    'undeployable' 		=> '<strong>Warning: </strong> This asset has been marked as currently undeployable. If this status has changed, please update the asset status.',
    'does_not_exist' 	=> 'Imovina ne postoji.',
    'does_not_exist_var'=> 'Asset with tag :asset_tag not found.',
    'no_tag' 	        => 'No asset tag provided.',
    'does_not_exist_or_not_requestable' => 'That asset does not exist or is not requestable.',
    'assoc_users'	 	=> 'Ovaj je entitet trenutno provjeren korisniku i ne može se izbrisati. Najprije provjerite snimljeni materijal, a zatim pokušajte ponovo ukloniti.',
    'warning_audit_date_mismatch' 	=> 'This asset\'s next audit date (:next_audit_date) is before the last audit date (:last_audit_date). Please update the next audit date.',

    'create' => [
        'error'   		=> 'Imovina nije izrađena, pokušajte ponovo. :(',
        'success' 		=> 'Imovina je uspješno izrađena. :)',
        'success_linked' => 'Asset with tag :tag was created successfully. <strong><a href=":link" style="color: white;">Click here to view</a></strong>.',
    ],

    'update' => [
        'error'   			=> 'Imovina nije ažurirana, pokušajte ponovo',
        'success' 			=> 'Imovina je uspješno ažurirana.',
        'encrypted_warning' => 'Asset updated successfully, but encrypted custom fields were not due to permissions',
        'nothing_updated'	=>  'Nije odabrano nijedno polje, tako da ništa nije ažurirano.',
        'no_assets_selected'  =>  'No assets were selected, so nothing was updated.',
        'assets_do_not_exist_or_are_invalid' => 'Selected assets cannot be updated.',
    ],

    'restore' => [
        'error'   		=> 'Imovina nije obnovljena, pokušajte ponovo',
        'success' 		=> 'Imovina je uspješno obnovljena.',
        'bulk_success' 		=> 'Imovina je uspješno obnovljena.',
        'nothing_updated'   => 'No assets were selected, so nothing was restored.', 
    ],

    'audit' => [
        'error'   		=> 'Asset audit unsuccessful: :error ',
        'success' 		=> 'Uspjeh uspješno prijavljen.',
    ],


    'deletefile' => [
        'error'   => 'Datoteka nije izbrisana. Molim te pokušaj ponovno.',
        'success' => 'Datoteka je uspješno obrisana.',
    ],

    'upload' => [
        'error'   => 'Datoteke nisu prenesene. Molim te pokušaj ponovno.',
        'success' => 'Datoteke su uspješno učitane.',
        'nofiles' => 'Niste odabrali nijednu datoteku za prijenos ili je datoteka koju pokušavate prenijeti prevelika',
        'invalidfiles' => 'Jedna ili više datoteka je prevelika ili je vrsta datoteke koja nije dopuštena. Dopuštene vrste datoteka su png, gif, jpg, doc, docx, pdf i txt.',
    ],

    'import' => [
        'import_button'         => 'Process Import',
        'error'                 => 'Neke stavke nisu pravilno uvezene.',
        'errorDetail'           => 'Sljedeće stavke nisu uvezene zbog pogrešaka.',
        'success'               => 'Vaša je datoteka uvezena',
        'file_delete_success'   => 'Vaša je datoteka uspješno izbrisana',
        'file_delete_error'      => 'Datoteka nije mogla biti izbrisana',
        'file_missing' => 'The file selected is missing',
        'header_row_has_malformed_characters' => 'One or more attributes in the header row contain malformed UTF-8 characters',
        'content_row_has_malformed_characters' => 'One or more attributes in the first row of content contain malformed UTF-8 characters',
    ],


    'delete' => [
        'confirm'   	=> 'Jeste li sigurni da želite izbrisati ovaj materijal?',
        'error'   		=> 'Došlo je do problema s brisanjem imovine. Molim te pokušaj ponovno.',
        'nothing_updated'   => 'Nijedna imovina nije odabrana, tako da ništa nije izbrisano.',
        'success' 		=> 'Imovina je uspješno obrisana.',
    ],

    'checkout' => [
        'error'   		=> 'Imovina nije odjavljena, pokušajte ponovo',
        'success' 		=> 'Asset je uspješno provjeren.',
        'user_does_not_exist' => 'Taj je korisnik nevažeći. Molim te pokušaj ponovno.',
        'not_available' => 'Taj materijal nije dostupan za naplatu!',
        'no_assets_selected' => 'Morate odabrati barem jednu imovinu s popisa',
    ],

    'checkin' => [
        'error'   		=> 'Prijava nije provjerena. Pokušajte ponovo',
        'success' 		=> 'Asset je uspješno prijavio.',
        'user_does_not_exist' => 'Taj je korisnik nevažeći. Molim te pokušaj ponovno.',
        'already_checked_in'  => 'Taj je entitet već prijavljen.',

    ],

    'requests' => [
        'error'   		=> 'Imovina nije zatražena, pokušajte ponovo',
        'success' 		=> 'Imovina je uspješno zatražena.',
        'canceled'      => 'Zahtjev za uplatu uspješno je otkazan',
    ],

];
