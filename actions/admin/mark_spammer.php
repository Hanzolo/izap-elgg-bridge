<?php
/**************************************************
* PluginLotto.com                                 *
* Copyrights (c) 2005-2010. iZAP                  *
* All rights reserved                             *
***************************************************
* @author iZAP Team "<support@izap.in>"
* @link http://www.izap.in/
* Under this agreement, No one has rights to sell this script further.
* For more information. Contact "Tarun Jangra<tarun@izap.in>"
* For discussion about corresponding plugins, visit http://www.pluginlotto.com/pg/forums/
* Follow us on http://facebook.com/PluginLotto and http://twitter.com/PluginLotto
 */
//http://seo1.iz/action/izap-elgg-bridge/submit_spammer?guid=171&__elgg_ts=1333502120&__elgg_token=90d3a4e59dbb268b636f321ebb91b840
$guid = get_input('guid');
$spammer = get_entity($guid);
$spammer->izap_is_spammer = 'yes';
echo $spammer->izap_spammer_hotness;
system_message(elgg_echo('izap-elgg-bridge:spammer_suspected'));
