<?php

namespace App\Plugins\WhatsappMessaging\Console\Commands;

use Illuminate\Console\Command;

class InstallPackage extends Command {
    protected $signature = 'whatsapp-messaging:install';
    protected $description = 'Install WhatsappMessaging Package';

    public function handle(): void {
        $this->info('Installing WhatsappMessaging Integration Package\n');

        // Here you can add plugin initialisation code.
        // For example creating initial plugin credentials in the database
        // or registering a Manufacurer with MicroPowerManager.

        $this->info('Package installed successfully..');
    }
}
