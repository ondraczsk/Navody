<?php
namespace xFlare\xRulesx;

use pocketmine\utils\TextFormat;
use pocketmine\plugin\PluginBase;
use pocketmine\event\Listener;
use pocketmine\event\player\PlayerChatEvent;
use pocketmine\command\CommandSender;
use pocketmine\command\Command;
use pocketmine\Player;

class Main extends PluginBase implements Listener{
	public function onEnable(){
		$this->getServer()->getPluginManager()->registerEvents($this, $this);
		$this->saveDefaultConfig();
		$this->getLogger()->info(TEXTFORMAT::BLUE . "[xFlare]" .TEXTFORMAT::RED. " >>" .TEXTFORMAT::AQUA.  " Done! xRulesx is running on Version 1.0.0!");
	}
	public function onCommand(CommandSender $sender, Command $command, $label, array $args) {
        $cmd = strtolower($command->getName());
        switch ($cmd){
            case "pravidla":
                if (!($sender instanceof Player)){
                    $sender->sendMessage(TEXTFORMAT::GOLD . "§f§l--------* §e§oPravidla §r§f§l*--------")
                    $sender->sendMessage(TEXTFORMAT::RED . "- " . $this->getConfig()->get("rule1"));
                    $sender->sendMessage(TEXTFORMAT::RED . "- " . $this->getConfig()->get("rule2"));
                    $sender->sendMessage(TEXTFORMAT::RED . "- " . $this->getConfig()->get("rule3"));
                    $sender->sendMessage(TEXTFORMAT::RED . "- " . $this->getConfig()->get("rule4"));
                    $sender->sendMessage(TEXTFORMAT::RED . "- " . $this->getConfig()->get("rule5"));
    
		if($this->getConfigValue("ruleother1") === true)
        {
           $sender->sendMessage(TEXTFORMAT::RED . "- " . $this->getConfig()->get("ruleothermessage1"));
        }
        else
        {
          $this->getLogger()->info(TEXTFORMAT::AQUA.  " Ignoring other rule 1");  
        }
			
				if($this->getConfigValue("ruleother2") === true)
        {
           $sender->sendMessage(TEXTFORMAT::RED . "- " . $this->getConfig()->get("ruleothermessage2"));
        }
        else
        {
          $this->getLogger()->info(TEXTFORMAT::AQUA.  " Ignoring other rule 2");  
        }
			
				if($this->getConfigValue("ruleother3") === true)
        {
           $sender->sendMessage(TEXTFORMAT::RED . "- " . $this->getConfig()->get("ruleothermessage3"));
        }
        else
        {
          $this->getLogger()->info(TEXTFORMAT::AQUA.  " Ignoring other rule 3");  
        }
                    return true;
                }
                $player = $this->getServer()->getPlayer($sender->getName());
                if ($player->hasPermission("xflare.pravidla")){
                    $sender->sendMessage("--------*pravidla*--------");
                    $sender->sendMessage("- " . $this->getConfig()->get("rule1"));
                    $sender->sendMessage("- " . $this->getConfig()->get("rule2"));
                    $sender->sendMessage("- " . $this->getConfig()->get("rule3"));
                    $sender->sendMessage("- " . $this->getConfig()->get("rule4"));
                    $sender->sendMessage("- " . $this->getConfig()->get("rule5"));
                    if($this->getConfigValue("ruleother1") === true)
        {
           $sender->sendMessage(TEXTFORMAT::RED . "- " . $this->getConfig()->get("ruleothermessage1"));
        }
        else
        {
          $this->getLogger()->info(TEXTFORMAT::AQUA.  " Ignoring other rule 1");  
        }
			
				if($this->getConfigValue("ruleother2") === true)
        {
           $sender->sendMessage(TEXTFORMAT::RED . "- " . $this->getConfig()->get("ruleothermessage2"));
        }
        else
        {
          $this->getLogger()->info(TEXTFORMAT::AQUA.  " Ignoring other rule 2");  
        }
			
				if($this->getConfigValue("ruleother3") === true)
        {
           $sender->sendMessage(TEXTFORMAT::RED . "- " . $this->getConfig()->get("ruleothermessage3"));
        }
        else
        {
          $this->getLogger()->info(TEXTFORMAT::AQUA.  " Ignoring other rule 3");  
        }
                    return true;
                }
                break;
            }
        }
    }
?>
