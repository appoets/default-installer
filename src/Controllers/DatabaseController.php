<?php

namespace Appoets\DefaultInstaller\Controllers;

use Illuminate\Routing\Controller;
use Appoets\DefaultInstaller\Helpers\DatabaseManager;
use Illuminate\Support\Facades\Artisan;
use Appoets\DefaultInstaller\Helpers\InstalledFileManager;

class DatabaseController extends Controller
{

    /**
     * @var DatabaseManager
     */
    private $databaseManager;

    /**
     * @param DatabaseManager $databaseManager
     */
    public function __construct(DatabaseManager $databaseManager)
    {
        $this->databaseManager = $databaseManager;
    }

    /**
     * Migrate and seed the database.
     *
     * @return \Illuminate\View\View
     */
    public function database(InstalledFileManager $fileManager)
    {

        try{
            Artisan::call('config:clear');
        }
        catch(Exception $e){
            return $e;
        }

        $response = $this->databaseManager->migrateAndSeed();

        if($response['status'] == 'success'){

            $fileManager->update();
            return redirect('/admin/login');

        }else{

            return redirect()->route('DefaultInstaller::environment')
                        ->with(['message' => $response['message']]);
        }

        
    }
}
