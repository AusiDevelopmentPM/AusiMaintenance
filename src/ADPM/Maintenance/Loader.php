<?php
/**
 * @org AusiDevelopmentPM
 * @author EyNoah1171
 * @year 2026
 * @license Dont steal my Code.
 */

namespace ADPM\Maintenance;

use ADPM\Maintenance\commands\MaintenanceCommand;
use pocketmine\plugin\PluginBase;
use pocketmine\Server;
use pocketmine\utils\SingletonTrait;

class Loader extends PluginBase {

    use SingletonTrait;

    public function onEnable(): void
    {
        self::setInstance($this);

        $this->initPlugin();


    }


    private function initPlugin(): void
    {
        $pm = Server::getInstance()->getPluginManager();
        $map = Server::getInstance()->getCommandMap();

        $map->register("ausimaintenance", new MaintenanceCommand());
    }

}