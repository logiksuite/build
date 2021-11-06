<?php

namespace LogikSuite\Build\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use LogikSuite\Build\LogikBuild;
use LogikSuite\Translation\Locale;

class TranslationController extends Controller
{

    /**
     * Indentation level
     *
     * @var integer
     */
    protected $_indentLevel = 0;

    /**
     * Display language list
     *
     * @return void
     */
    public function languages()
    {

        $aSelectedLanguages = LogikBuild::getInstalledModules()[\LogikSuite\Translation\TranslationModule::class]["Languages"];

        $s = "<div class=\"card\">";
        $s .= "<div class=\"card-header\">
                    <h3 class=\"card-title\">Locales</h3>
                    <div class=\"ms-auto\">
                    <div class=\"input-icon\">
                        <span class=\"input-icon-addon\">                      
                        <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"icon\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" stroke-width=\"2\" stroke=\"currentColor\" fill=\"none\" stroke-linecap=\"round\" stroke-linejoin=\"round\"><path stroke=\"none\" d=\"M0 0h24v24H0z\" fill=\"none\"></path><circle cx=\"10\" cy=\"10\" r=\"7\"></circle><line x1=\"21\" y1=\"21\" x2=\"15\" y2=\"15\"></line></svg>
                        </span>
                        <input id=\"txtSearchLanguages\" type=\"text\" class=\"form-control\" placeholder=\"Search…\" aria-label=\"Search in languages\">
                    </div>
                    </div>
               </div>";
        $s .= "<div class=\"list-group list-group-flush\">";

        $sSelectedItems = "";
        $sUnselectedItems = "";

        foreach (Locale::getLocales() as $sLocaleCode => $sLocaleName) {
            $bSelected = false;
            if (array_key_exists($sLocaleCode, $aSelectedLanguages)) {
                $bSelected = true;
            }

            $sItem = "<div class=\"list-group-item language-item\">
            <div class=\"row align-items-center\">
              <div class=\"col-auto\"><input type=\"checkbox\" class=\"form-check-input language-selector\"" . ($bSelected ? " checked" : "") . " value=\"" . $sLocaleCode . "\"></div>              
              <div class=\"col text-truncate\">
                <span class=\"text-body d-block\">" . $sLocaleCode . "</span>
                <small class=\"d-block text-muted text-truncate mt-n1\">" .  $sLocaleName .  "</small>
              </div>
            </div>
          </div>";

            if ($bSelected) {
                $sSelectedItems .= $sItem;
            } else {
                $sUnselectedItems .= $sItem;
            }
        }

        $s .= "<div class=\"list-group-header\">Selected locales</div>";
        $s .= $sSelectedItems;

        $s .= "<div class=\"list-group-header\">Available locales</div>";
        $s .= $sUnselectedItems;

        $s .= "</div>";
        $s .= "</div>";

        $sJS = "";


        return view('logikbuild::ui')
            ->with('page_subtitle', 'Translations')
            ->with('page_title', 'Locales')
            ->with('page_content', $s)
            ->with('menu_translation', ' show')
            ->with('menu_translation_language', ' active');
    }

    /**
     * Translation Editor
     *
     * @param [type] $file
     * @return void
     */
    public function editor($file = null)
    {

        $aSelectedLanguages = LogikBuild::getInstalledModules()[\LogikSuite\Translation\TranslationModule::class]["Languages"];


        $aKeys = [];

        if ($file !== null) {
            \LogikSuite\Translation\TranslationModule::setProjectRootPath(LogikBuild::getProjectRootPath());
            $aKeys = \LogikSuite\Translation\TranslationModule::getLanguageFileKeys($file);
        }

        $s = "";

        $s .= "<div class=\"col-md-3\">";

        $s .= "<div class=\"card\">";
        $s .= "<div class=\"card-header\">
                    <h3 class=\"card-title\">Language files</h3>           
                    <div class=\"ms-auto\">
                    <button class=\"btn btn-primary\">
                    <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"icon icon-tabler icon-tabler-plus\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" stroke-width=\"2\" stroke=\"currentColor\" fill=\"none\" stroke-linecap=\"round\" stroke-linejoin=\"round\">
                     <path stroke=\"none\" d=\"M0 0h24v24H0z\" fill=\"none\"></path>
                        <line x1=\"12\" y1=\"5\" x2=\"12\" y2=\"19\"></line>
                        <line x1=\"5\" y1=\"12\" x2=\"19\" y2=\"12\"></line>
                    </svg>Add</button>
                    </div>
               </div>";
        $s .= "<div class=\"list-group list-group-flush\">";

        $aUniqueFileNames = [];
        foreach ($aSelectedLanguages as $sLocale => $aLanguage) {
            foreach ($aLanguage["LanguageFiles"] as $aLanguageFile) {
                if (!array_key_exists($aLanguageFile["Name"], $aUniqueFileNames)) {
                    $aUniqueFileNames[$aLanguageFile["Name"]] = [
                        "locales" => [],
                        "path" => $aLanguageFile["Path"]
                    ];
                }
                $aUniqueFileNames[$aLanguageFile["Name"]]["locales"][] = $sLocale;
            }
        }

        foreach ($aUniqueFileNames as $sFileName => $aFileInfo) {
            $sDisplayName = str_replace(".php", "", $sFileName);

            $s .= "<div class=\"list-group-item language-item" . ($sDisplayName == $file ? " active" : "") . "\" style=\"cursor:pointer;\" onclick=\"document.location.href='/translation/editor/" . $sDisplayName . "'\">
            <div class=\"row align-items-center\">              
             <div class=\"col-auto\">              
             <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"icon icon-tabler icon-tabler-file-code-2\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" stroke-width=\"2\" stroke=\"currentColor\" fill=\"none\" stroke-linecap=\"round\" stroke-linejoin=\"round\">
             <path stroke=\"none\" d=\"M0 0h24v24H0z\" fill=\"none\"></path>
             <path d=\"M10 12h-1v5h1\"></path>
             <path d=\"M14 12h1v5h-1\"></path>
             <path d=\"M14 3v4a1 1 0 0 0 1 1h4\"></path>
             <path d=\"M17 21h-10a2 2 0 0 1 -2 -2v-14a2 2 0 0 1 2 -2h7l5 5v11a2 2 0 0 1 -2 2z\"></path>
            </svg>
              </div>              
              <div class=\"col text-truncate\">
                <span class=\"d-block\" style=\"padding-bottom: 5px;\">" . $sDisplayName . "</span> ";
            foreach ($aFileInfo["locales"] as $sLocalName) {
                $s .= "<div class=\"badge bg-success\" style=\"margin-right:5px;\">$sLocalName</div>";
            }

              $s .= "</div>
            </div>
          </div>";
        }

        $s .= "</div>";
        $s .= "</div>";
        $s .= "</div>";

        $s .= "<div class=\"col-md-9\">";

        $s .= "<div class=\"card\">";
        $s .= "<div class=\"card-header\">
                    <h3 class=\"card-title\">Translations</h3>
                    <div class=\"ms-auto\">
                        <div class=\"input-icon\">
                            <span class=\"input-icon-addon\">                      
                            <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"icon\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" stroke-width=\"2\" stroke=\"currentColor\" fill=\"none\" stroke-linecap=\"round\" stroke-linejoin=\"round\"><path stroke=\"none\" d=\"M0 0h24v24H0z\" fill=\"none\"></path><circle cx=\"10\" cy=\"10\" r=\"7\"></circle><line x1=\"21\" y1=\"21\" x2=\"15\" y2=\"15\"></line></svg>
                            </span>
                            <input id=\"txtSearchKeys\" type=\"text\" class=\"form-control\" placeholder=\"Search…\" aria-label=\"Search in keys\">                            
                        </div>                                                           
                    </div>                                                           
                    <div style=\"margin-left:10px;\">
                        <button class=\"btn btn-primary\" onClick=\"LogikBuild.modules.Translation.showEditorDialog('','" . $file . "');\">
                        <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"icon icon-tabler icon-tabler-plus\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" stroke-width=\"2\" stroke=\"currentColor\" fill=\"none\" stroke-linecap=\"round\" stroke-linejoin=\"round\">
                         <path stroke=\"none\" d=\"M0 0h24v24H0z\" fill=\"none\"></path>
                            <line x1=\"12\" y1=\"5\" x2=\"12\" y2=\"19\"></line>
                            <line x1=\"5\" y1=\"12\" x2=\"19\" y2=\"12\"></line>
                        </svg>Add</button>
                    </div>
               </div>";

        if ($file !== null) {
            $s .= "<div class=\"card-table table-responsive\">";
            $s .= "<table class=\"table table-vcenter\">";
            $s .= " <thead>";
            $s .= "     <tr>";
            $s .= "         <th colspan=\"3\">&nbsp;</th>";
            $s .= "         <th colspan=\"" . count($aSelectedLanguages) . "\" style=\"text-align:center;\">Locales</th>";
            $s .= "     </tr>";
            $s .= "     <tr>";
            $s .= "         <th style=\"width:30px;\">&nbsp;</th>";
            $s .= "         <th>Key</th>";
            $s .= "         <th>Value</th>";
            foreach ($aSelectedLanguages as $sLocale => $aLanguage) {
                $s .= "         <th style=\"width:60px;text-align:center;\">" . $sLocale . "</th>";
            }
            $s .= "     </tr>";
            $s .= "</thead>";
            foreach ($aKeys as $sKey => $mValue) {
                $s .= $this->renderTranslationKeyRow($file, $sKey, $mValue, $aSelectedLanguages);
            }
            $s .= "</table>";
            $s .= "</div>";
        }

        $s .= "</div>";

        $s .= "</div>";

        $sSelectedLanguages = "";
        foreach ($aSelectedLanguages as $sLocale => $aLanguage) {
            if ($sSelectedLanguages != "") {
                $sSelectedLanguages .= ",";
            }
            $sSelectedLanguages .= $sLocale;
        }

        return view('logikbuild::ui')
        ->with('page_subtitle', 'Translations')
        ->with('page_title', 'Editor')
        ->with('page_content', $s)
        ->with('menu_translation', ' show')
        ->with('menu_translation_editor', ' active')
        ->with('selected_languages', $sSelectedLanguages);
    }

    public function save(Request $request)
    {

        \LogikSuite\Translation\TranslationModule::setProjectRootPath(LogikBuild::getProjectRootPath());

        $aKeys = $request->input('keys');
        foreach ($aKeys as &$aKey) {
            \LogikSuite\Translation\TranslationModule::saveTranslationFile(
                $aKey['file'],
                $aKey['locale'],
                [
                    $aKey['key'] => $aKey['value']
                ]
            );

            $aKey["uid"] = md5($aKey['key'] . "_" . $aKey['file'] . "_" . $aKey['locale']);
            if ($aKey['value'] != "") {
                $aKey["status"] = "success";
            } else {
                $aKey["status"] = "default";
            }
        }

        return response()->json(['keys' => $aKeys]);
    }

    protected function renderTranslationKeyRow($file, $sKey, $mValue, $aSelectedLanguages, $sParentKey = null)
    {

        $s = "";

        if ($file !== null) {
            \LogikSuite\Translation\TranslationModule::setProjectRootPath(LogikBuild::getProjectRootPath());
        }

        if (is_array($mValue)) {
            // Load sub keys
            $s .= "<tr class=\"translation-item\">";
            $s .= " <td><button class=\"btn btn-danger btn-sm btn-icon\"><svg xmlns=\"http://www.w3.org/2000/svg\" class=\"icon icon-tabler icon-tabler-trash\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" stroke-width=\"2\" stroke=\"currentColor\" fill=\"none\" stroke-linecap=\"round\" stroke-linejoin=\"round\">
            <path stroke=\"none\" d=\"M0 0h24v24H0z\" fill=\"none\"></path>
            <line x1=\"4\" y1=\"7\" x2=\"20\" y2=\"7\"></line>
            <line x1=\"10\" y1=\"11\" x2=\"10\" y2=\"17\"></line>
            <line x1=\"14\" y1=\"11\" x2=\"14\" y2=\"17\"></line>
            <path d=\"M5 7l1 12a2 2 0 0 0 2 2h8a2 2 0 0 0 2 -2l1 -12\"></path>
            <path d=\"M9 7v-3a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v3\"></path>
         </svg></button></td>";
            $s .= " <td colspan=\"2\" style=\""  . ( $this->_indentLevel != 0 ? "padding-left:" .  $this->_indentLevel . "px;" : "") . "\">" . $sKey . "</td>";
            $s .= " <td colspan=\"" . count($aSelectedLanguages) . "\" style=\"text-align:right;\"><button class=\"btn btn-sm btn-primary\">
            <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"icon icon-tabler icon-tabler-plus\" width=\"16\" height=\"16\" viewBox=\"0 0 24 24\" stroke-width=\"2\" stroke=\"currentColor\" fill=\"none\" stroke-linecap=\"round\" stroke-linejoin=\"round\">
             <path stroke=\"none\" d=\"M0 0h24v24H0z\" fill=\"none\"></path>
                <line x1=\"12\" y1=\"5\" x2=\"12\" y2=\"19\"></line>
                <line x1=\"5\" y1=\"12\" x2=\"19\" y2=\"12\"></line>
            </svg>Add</button></td>";
            $s .= "</tr>";
            $this->_indentLevel += 40;
            foreach ($mValue as $sSubKey => $mSubValue) {
                $s .= $this->renderTranslationKeyRow($file, $sSubKey, $mSubValue, $aSelectedLanguages, $sKey);
            }
            $this->_indentLevel -= 40;
        } else {
            $s .= "<tr class=\"translation-item\">";
            $s .= " <td><button class=\"btn btn-danger btn-sm btn-icon\"><svg xmlns=\"http://www.w3.org/2000/svg\" class=\"icon icon-tabler icon-tabler-trash\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" stroke-width=\"2\" stroke=\"currentColor\" fill=\"none\" stroke-linecap=\"round\" stroke-linejoin=\"round\">
            <path stroke=\"none\" d=\"M0 0h24v24H0z\" fill=\"none\"></path>
            <line x1=\"4\" y1=\"7\" x2=\"20\" y2=\"7\"></line>
            <line x1=\"10\" y1=\"11\" x2=\"10\" y2=\"17\"></line>
            <line x1=\"14\" y1=\"11\" x2=\"14\" y2=\"17\"></line>
            <path d=\"M5 7l1 12a2 2 0 0 0 2 2h8a2 2 0 0 0 2 -2l1 -12\"></path>
            <path d=\"M9 7v-3a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v3\"></path>
         </svg></button></td>";
            $s .= " <td style=\""  . ( $this->_indentLevel != 0 ? "padding-left:" .  $this->_indentLevel . "px;" : "") . "width:25%;\"><a href=\"javascript: LogikBuild.modules.Translation.showEditorDialog('" . $sKey . "', '" . $file . "');\">" . $sKey . "</a></td>";
            $s .= " <td><a href=\"javascript: LogikBuild.modules.Translation.showEditorDialog('" . $sKey . "', '" . $file . "');\">" . $mValue . "</a></td>";
            foreach ($aSelectedLanguages as $sLocale => $aLanguage) {
                /**
                 * Check if we have a value for specific locale
                 */
                $bHasValue = false;
                if ($file !== null) {
                    if (\LogikSuite\Translation\TranslationModule::get(($sParentKey ? $sParentKey . "." : "") . $sKey, $file, $sLocale) != "") {
                        $bHasValue = true;
                    }
                }
                $s .= "         <td style=\"width:60px;text-align:center;\"><span id=\"" . md5($sKey . "_" . $file . "_" . $sLocale) . "\" class=\"badge " . ($bHasValue ? "bg-success" : "bg-default") . "\">" . $sLocale . "</span></td>";
            }
            $s .= "</tr>";
        }


        return $s;
    }

    public function get($sFile, $sKey, $sLocale)
    {

        \LogikSuite\Translation\TranslationModule::setProjectRootPath(LogikBuild::getProjectRootPath());
        $sValue = \LogikSuite\Translation\TranslationModule::get($sKey, $sFile, $sLocale);

        return response()->json([[
            'file' => $sFile,
            'key' => $sKey,
            'locale' => $sLocale,
            'value' => $sValue,
        ]]);
    }

    /**
     * Gets multiple translation string at once
     *
     * @param Request $request
     * @return void
     */
    public function getBatch(Request $request)
    {
        \LogikSuite\Translation\TranslationModule::setProjectRootPath(LogikBuild::getProjectRootPath());

        $aResponse = [];
        $aKeys =  $request->input('keys');
        foreach ($aKeys as $aKey) {
            $sValue = \LogikSuite\Translation\TranslationModule::get($aKey['key'], $aKey['file'], $aKey['locale']);
            $aResponse[] = [
                'file' => $aKey['file'],
                'key' => $aKey['key'],
                'locale' => $aKey['locale'],
                'value' => $sValue,
            ];
        }

        return response()->json($aResponse);
    }

    public function addLocale(Request $request)
    {
        \LogikSuite\Translation\TranslationModule::setProjectRootPath(LogikBuild::getProjectRootPath());

        $sLocale = $request->input('locale');

        /**
         * @todo validate locale
         */

        \LogikSuite\Translation\TranslationModule::addLocale($sLocale);

        return response()->json([
            'locale' => $sLocale,
        ]);
    }

    public function removeLocale(Request $request)
    {
        \LogikSuite\Translation\TranslationModule::setProjectRootPath(LogikBuild::getProjectRootPath());

        $sLocale = $request->input('locale');

        /**
         * @todo validate locale
         */

        \LogikSuite\Translation\TranslationModule::removeLocale($sLocale);

        return response()->json([
            'locale' => $sLocale,
        ]);
    }

    public function translate(Request $request)
    {

        $sText = $request->input('text');
        $sLocale = $request->input('locale');

        \LogikSuite\Translation\TranslationModule::setProjectRootPath(LogikBuild::getProjectRootPath());
        $sTranslatedText = \LogikSuite\Translation\TranslationModule::translate($sText, $sLocale);

        return response()->json([
            'translated_text' => $sTranslatedText,
            'locale' => $sLocale,
        ]);
    }
}
