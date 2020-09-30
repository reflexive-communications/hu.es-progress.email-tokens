<?php

require_once 'email_token.civix.php';

use Civi\Api4\Contact;

/**
 * Implements hook_civicrm_config().
 *
 * @link https://docs.civicrm.org/dev/en/latest/hooks/hook_civicrm_config/
 */
function email_token_civicrm_config(&$config)
{
    _email_token_civix_civicrm_config($config);
}

/**
 * Implements hook_civicrm_xmlMenu().
 *
 * @link https://docs.civicrm.org/dev/en/latest/hooks/hook_civicrm_xmlMenu
 */
function email_token_civicrm_xmlMenu(&$files)
{
    _email_token_civix_civicrm_xmlMenu($files);
}

/**
 * Implements hook_civicrm_install().
 *
 * @link https://docs.civicrm.org/dev/en/latest/hooks/hook_civicrm_install
 */
function email_token_civicrm_install()
{
    _email_token_civix_civicrm_install();
}

/**
 * Implements hook_civicrm_postInstall().
 *
 * @link https://docs.civicrm.org/dev/en/latest/hooks/hook_civicrm_postInstall
 */
function email_token_civicrm_postInstall()
{
    _email_token_civix_civicrm_postInstall();
}

/**
 * Implements hook_civicrm_uninstall().
 *
 * @link https://docs.civicrm.org/dev/en/latest/hooks/hook_civicrm_uninstall
 */
function email_token_civicrm_uninstall()
{
    _email_token_civix_civicrm_uninstall();
}

/**
 * Implements hook_civicrm_enable().
 *
 * @link https://docs.civicrm.org/dev/en/latest/hooks/hook_civicrm_enable
 */
function email_token_civicrm_enable()
{
    _email_token_civix_civicrm_enable();
}

/**
 * Implements hook_civicrm_disable().
 *
 * @link https://docs.civicrm.org/dev/en/latest/hooks/hook_civicrm_disable
 */
function email_token_civicrm_disable()
{
    _email_token_civix_civicrm_disable();
}

/**
 * Implements hook_civicrm_upgrade().
 *
 * @link https://docs.civicrm.org/dev/en/latest/hooks/hook_civicrm_upgrade
 */
function email_token_civicrm_upgrade($op, CRM_Queue_Queue $queue = null)
{
    return _email_token_civix_civicrm_upgrade($op, $queue);
}

/**
 * Implements hook_civicrm_managed().
 *
 * Generate a list of entities to create/deactivate/delete when this module
 * is installed, disabled, uninstalled.
 *
 * @link https://docs.civicrm.org/dev/en/latest/hooks/hook_civicrm_managed
 */
function email_token_civicrm_managed(&$entities)
{
    _email_token_civix_civicrm_managed($entities);
}

/**
 * Implements hook_civicrm_caseTypes().
 *
 * Generate a list of case-types.
 *
 * Note: This hook only runs in CiviCRM 4.4+.
 *
 * @link https://docs.civicrm.org/dev/en/latest/hooks/hook_civicrm_caseTypes
 */
function email_token_civicrm_caseTypes(&$caseTypes)
{
    _email_token_civix_civicrm_caseTypes($caseTypes);
}

/**
 * Implements hook_civicrm_angularModules().
 *
 * Generate a list of Angular modules.
 *
 * Note: This hook only runs in CiviCRM 4.5+. It may
 * use features only available in v4.6+.
 *
 * @link https://docs.civicrm.org/dev/en/latest/hooks/hook_civicrm_angularModules
 */
function email_token_civicrm_angularModules(&$angularModules)
{
    _email_token_civix_civicrm_angularModules($angularModules);
}

/**
 * Implements hook_civicrm_alterSettingsFolders().
 *
 * @link https://docs.civicrm.org/dev/en/latest/hooks/hook_civicrm_alterSettingsFolders
 */
function email_token_civicrm_alterSettingsFolders(&$metaDataFolders = null)
{
    _email_token_civix_civicrm_alterSettingsFolders($metaDataFolders);
}

/**
 * Implements hook_civicrm_entityTypes().
 *
 * Declare entity types provided by this module.
 *
 * @link https://docs.civicrm.org/dev/en/latest/hooks/hook_civicrm_entityTypes
 */
function email_token_civicrm_entityTypes(&$entityTypes)
{
    _email_token_civix_civicrm_entityTypes($entityTypes);
}

/**
 * Implements hook_civicrm_thems().
 */
function email_token_civicrm_themes(&$themes)
{
    _email_token_civix_civicrm_themes($themes);
}

// --- Functions below this ship commented out. Uncomment as required. ---

/**
 * Implements hook_civicrm_preProcess().
 *
 * @link https://docs.civicrm.org/dev/en/latest/hooks/hook_civicrm_preProcess
 *
 * function email_token_civicrm_preProcess($formName, &$form) {
 *
 * } // */

/**
 * Implements hook_civicrm_navigationMenu().
 *
 * @link https://docs.civicrm.org/dev/en/latest/hooks/hook_civicrm_navigationMenu
 *
 * function email_token_civicrm_navigationMenu(&$menu)
 * {
 * _email_token_civix_insert_navigation_menu($menu, 'Mailings', array(
 * 'label' => E::ts('New subliminal message'),
 * 'name' => 'mailing_subliminal_message',
 * 'url' => 'civicrm/mailing/subliminal',
 * 'permission' => 'access CiviMail',
 * 'operator' => 'OR',
 * 'separator' => 0,
 * ));
 * _email_token_civix_navigationMenu($menu);
 * } // */

/**
 * Adds new custom tokens
 *
 * @param $tokens
 */
function email_token_civicrm_tokens(&$tokens)
{
    $tokens['email'] = [
    'email.greeting' => 'Hungarian Greeting',
    ];
}

/**
 * Fetch values for tokens
 *
 * @param $values
 * @param $cids
 * @param null $job
 * @param array $tokens
 * @param null $context
 *
 * @throws \API_Exception
 * @throws \Civi\API\Exception\UnauthorizedException
 */
function email_token_civicrm_tokenValues(&$values, $cids, $job = null, $tokens = [], $context = null)
{
    // Check if custom tokens available
    if (!isset($tokens['email'])) {
        return;
    }

    // Greeting
    if (email_token_isTokenRequested($tokens, 'email', 'greeting')) {
        email_token_greeting($values, $cids);
    }
}

/**
 * "Send an Email" and "CiviMail" send different parameters to the tokenValues
 * hook (in CiviCRM 5.x). This works around that.
 *
 * @param array $tokens
 * @param string $group
 * @param string $token
 *
 * @return bool
 */
function email_token_isTokenRequested($tokens, $group, $token)
{
    // CiviMail sets $tokens to the format:
    //   [ 'group' => [ 'token_name' => 1 ] ]
    // "Send an email" sets $tokens to the format:
    //  [ 'group' => [ 0 => 'token_name' ] ]
    if (array_key_exists($token, $tokens[$group]) || in_array(
        $token,
        $tokens[$group]
    )) {
        return true;
    }

    return false;
}

/**
 * Gets token value (builds greeting)
 *
 * @param $values
 * @param $cids
 *
 * @throws \API_Exception
 * @throws \Civi\API\Exception\UnauthorizedException
 */
function email_token_greeting(&$values, $cids)
{
    foreach ($cids as $cid) {
        // Retrieve contact data
        $contacts = Contact::get()
        ->setSelect(
            [
            'first_name',
            'last_name',
            ]
        )
        ->addWhere('id', '=', $cid)
        ->setLimit(1)
        ->execute();

        // Query error checking
        if (empty($contacts) || $contacts->count() != 1) {
            return;
        }

        // Get results
        $contact = $contacts->first();

        $first_name = $contact['first_name'] ?? null;
        $last_name = $contact['last_name'] ?? null;

        // Build greeting
        if ($first_name) {
            if ($last_name) {
                $name = $last_name.' '.$first_name;
            } else {
                $name = $first_name;
            }
        } else {
            $name = 'Támogatónk';
        }
        $values[$cid]['email.greeting'] = 'Kedves '.$name.'!';
    }
}
