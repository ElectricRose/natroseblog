<?php

/* recipe.twig */
class __TwigTemplate_642db55d2fa69a586d9c5d2285360b11ccf57a217d44d9398efcfa73018460c1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 2
        $context["recipe_props"] = $this->loadTemplate("macros.twig", "recipe.twig", 2);
        // line 3
        echo "
<div id=\"zlrecipe-container-";
        // line 4
        echo twig_escape_filter($this->env, ($context["recipe_id"] ?? null), "html", null, true);
        echo "\" class=\"zlrecipe-container-border\" ";
        if (($context["border_style"] ?? null)) {
            echo "style=\"border: ";
            echo ($context["border_style"] ?? null);
            echo ";\"";
        }
        echo ">
<div ";
        // line 5
        echo $context["recipe_props"]->getrecipe_attr("itemtype", "http://schema.org/Recipe", ($context["amp_on"] ?? null));
        echo "
        ";
        // line 6
        echo $context["recipe_props"]->getrecipe_attr("itemscope", false, ($context["amp_on"] ?? null));
        echo "
        id=\"zlrecipe-container\" class=\"serif zlrecipe\">
  <div id=\"zlrecipe-innerdiv\">
    <div class=\"item b-b\">

      ";
        // line 12
        echo "      ";
        if ((($context["print_hide"] ?? null) != "Hide")) {
            // line 13
            echo "        <div class=\"zlrecipe-print-link fl-r\">
          ";
            // line 14
            if (($context["custom_print_image"] ?? null)) {
                // line 15
                echo "            <a class=\"print-link\" title=\"";
                echo __("Print this recipe", 'zip-recipes');
                echo "\" href=\"javascript:void(0);\" onclick=\"zlrPrint('zlrecipe-container-";
                echo twig_escape_filter($this->env, ($context["recipe_id"] ?? null), "html", null, true);
                echo "', '";
                echo twig_escape_filter($this->env, ($context["ZRDN_PLUGIN_URL"] ?? null), "html", null, true);
                echo "'); return false\" rel=\"nofollow\">
              <img src=\"";
                // line 16
                echo twig_escape_filter($this->env, ($context["custom_print_image"] ?? null), "html", null, true);
                echo "\">
            </a>
          ";
            } else {
                // line 19
                echo "            <a class=\"butn-link\" title=\"";
                echo __("Print this recipe", 'zip-recipes');
                echo "\" href=\"javascript:void(0);\" onclick=\"zlrPrint('zlrecipe-container-";
                echo twig_escape_filter($this->env, ($context["recipe_id"] ?? null), "html", null, true);
                echo "', '";
                echo twig_escape_filter($this->env, ($context["ZRDN_PLUGIN_URL"] ?? null), "html", null, true);
                echo "'); return false\" rel=\"nofollow\">
              ";
                // line 20
                echo __("Print", 'zip-recipes');
                // line 21
                echo "            </a>
          ";
            }
            // line 23
            echo "        </div>
      ";
        }
        // line 25
        echo "
      ";
        // line 27
        echo "      <div id=\"zlrecipe-title\"
          ";
        // line 28
        echo $context["recipe_props"]->getrecipe_attr("itemprop", "name", ($context["amp_on"] ?? null));
        echo "
        class=\"b-b h-1 strong ";
        // line 29
        if (($context["title_hide"] ?? null)) {
            echo "texthide";
        }
        echo "\" >";
        echo twig_escape_filter($this->env, ($context["recipe_title"] ?? null), "html", null, true);
        echo "</div>
    </div>

    ";
        // line 33
        echo "    <div class=\"zlmeta zlclear\">
      <div class=\"fl-l width-50\">
        ";
        // line 35
        echo ($context["recipe_rating"] ?? null);
        echo "

        ";
        // line 38
        echo "        ";
        if (($context["prep_time"] ?? null)) {
            // line 39
            echo "          <p id=\"zlrecipe-prep-time\">
            ";
            // line 40
            if ((($context["prep_time_label_hide"] ?? null) != "Hide")) {
                // line 41
                echo "              ";
                echo __("Prep Time:", 'zip-recipes');
                // line 42
                echo "            ";
            }
            // line 43
            echo "            <span
                ";
            // line 44
            echo $context["recipe_props"]->getrecipe_attr("itemprop", "prepTime", ($context["amp_on"] ?? null));
            echo "
                ";
            // line 45
            echo $context["recipe_props"]->getrecipe_attr("content", ($context["prep_time_raw"] ?? null), ($context["amp_on"] ?? null));
            echo "
            >";
            // line 46
            echo twig_escape_filter($this->env, ($context["prep_time"] ?? null), "html", null, true);
            echo "</span>
          </p>
        ";
        }
        // line 49
        echo "
        ";
        // line 50
        if (($context["cook_time"] ?? null)) {
            // line 51
            echo "          <p id=\"zlrecipe-cook-time\">
            ";
            // line 52
            if ((($context["cook_time_label_hide"] ?? null) != "Hide")) {
                // line 53
                echo "              ";
                echo __("Cook Time:", 'zip-recipes');
                // line 54
                echo "            ";
            }
            // line 55
            echo "            <span
                ";
            // line 56
            echo $context["recipe_props"]->getrecipe_attr("itemprop", "cookTime", ($context["amp_on"] ?? null));
            echo "
                ";
            // line 57
            echo $context["recipe_props"]->getrecipe_attr("content", ($context["cook_time_raw"] ?? null), ($context["amp_on"] ?? null));
            echo "
            >";
            // line 58
            echo twig_escape_filter($this->env, ($context["cook_time"] ?? null), "html", null, true);
            echo "</span>
          </p>
        ";
        }
        // line 61
        echo "
        ";
        // line 62
        if (($context["total_time"] ?? null)) {
            // line 63
            echo "          <p id=\"zlrecipe-total-time\">
            ";
            // line 64
            if ((($context["total_time_label_hide"] ?? null) != "Hide")) {
                // line 65
                echo "              ";
                echo __("Total Time:", 'zip-recipes');
                // line 66
                echo "            ";
            }
            // line 67
            echo "            <span
                ";
            // line 68
            echo $context["recipe_props"]->getrecipe_attr("itemprop", "totalTime", ($context["amp_on"] ?? null));
            echo "
                ";
            // line 69
            echo $context["recipe_props"]->getrecipe_attr("content", ($context["total_time_raw"] ?? null), ($context["amp_on"] ?? null));
            echo "
            >";
            // line 70
            echo twig_escape_filter($this->env, ($context["total_time"] ?? null), "html", null, true);
            echo "</span>
          </p>
        ";
        }
        // line 73
        echo "            
        ";
        // line 74
        if (($context["category"] ?? null)) {
            // line 75
            echo "          <p id=\"zlrecipe-category\">
            ";
            // line 76
            if ((($context["category_label_hide"] ?? null) != "Hide")) {
                // line 77
                echo "              ";
                echo __("Category:", 'zip-recipes');
                // line 78
                echo "            ";
            }
            // line 79
            echo "            <span
                ";
            // line 80
            echo $context["recipe_props"]->getrecipe_attr("itemprop", "recipeCategory", ($context["amp_on"] ?? null));
            echo "
                ";
            // line 81
            echo $context["recipe_props"]->getrecipe_attr("content", ($context["category"] ?? null), ($context["amp_on"] ?? null));
            echo "
            >";
            // line 82
            echo twig_escape_filter($this->env, ($context["category"] ?? null), "html", null, true);
            echo "</span>
          </p>
        ";
        }
        // line 84
        echo "            
            
         ";
        // line 86
        if (($context["cuisine"] ?? null)) {
            // line 87
            echo "          <p id=\"zlrecipe-cuisine\">
            ";
            // line 88
            if ((($context["cuisine_label_hide"] ?? null) != "Hide")) {
                // line 89
                echo "              ";
                echo __("Cuisine:", 'zip-recipes');
                // line 90
                echo "            ";
            }
            // line 91
            echo "            <span
                ";
            // line 92
            echo $context["recipe_props"]->getrecipe_attr("itemprop", "recipeCuisine", ($context["amp_on"] ?? null));
            echo "
                ";
            // line 93
            echo $context["recipe_props"]->getrecipe_attr("content", ($context["cuisine"] ?? null), ($context["amp_on"] ?? null));
            echo "
            >";
            // line 94
            echo twig_escape_filter($this->env, ($context["cuisine"] ?? null), "html", null, true);
            echo "</span>
          </p>
        ";
        }
        // line 97
        echo "
        ";
        // line 98
        echo ($context["author_section"] ?? null);
        echo "

        ";
        // line 101
        echo "      </div>

      <div class=\"fl-l width-50\">
        ";
        // line 105
        echo "
        ";
        // line 106
        if (($context["yield"] ?? null)) {
            // line 107
            echo "          <p id=\"zlrecipe-yield\">
            ";
            // line 108
            if ((($context["yield_label_hide"] ?? null) != "Hide")) {
                // line 109
                echo "              ";
                echo __("Yield:", 'zip-recipes');
                // line 110
                echo "            ";
            }
            // line 111
            echo "            <span ";
            echo $context["recipe_props"]->getrecipe_attr("itemprop", "recipeYield", ($context["amp_on"] ?? null));
            echo ">";
            echo twig_escape_filter($this->env, ($context["yield"] ?? null), "html", null, true);
            echo "</span>
          </p>
        ";
        }
        // line 114
        echo "
        ";
        // line 115
        if (($context["nutritional_info"] ?? null)) {
            // line 116
            echo "          <div id=\"zlrecipe-nutrition\"
                  ";
            // line 117
            echo $context["recipe_props"]->getrecipe_attr("itemprop", "nutrition", ($context["amp_on"] ?? null));
            echo "
                  ";
            // line 118
            echo $context["recipe_props"]->getrecipe_attr("itemscope", false, ($context["amp_on"] ?? null));
            echo "
                  ";
            // line 119
            echo $context["recipe_props"]->getrecipe_attr("itemtype", "http://schema.org/NutritionInformation", ($context["amp_on"] ?? null));
            echo ">

          ";
            // line 121
            if (($context["serving_size"] ?? null)) {
                // line 122
                echo "              <p id=\"zlrecipe-serving-size\">
                ";
                // line 123
                if ((($context["serving_size_label_hide"] ?? null) != "Hide")) {
                    // line 124
                    echo "                  ";
                    echo __("Serving Size:", 'zip-recipes');
                    // line 125
                    echo "                ";
                }
                // line 126
                echo "                <span
                        ";
                // line 127
                echo $context["recipe_props"]->getrecipe_attr("itemprop", "servingSize", ($context["amp_on"] ?? null));
                echo ">";
                echo twig_escape_filter($this->env, ($context["serving_size"] ?? null), "html", null, true);
                echo "</span>
              </p>
            ";
            }
            // line 130
            echo "
            ";
            // line 131
            if (($context["calories"] ?? null)) {
                // line 132
                echo "              <p id=\"zlrecipe-calories\">
                ";
                // line 133
                if ((($context["calories_label_hide"] ?? null) != "Hide")) {
                    // line 134
                    echo "                  ";
                    echo __("Calories per serving:", 'zip-recipes');
                    // line 135
                    echo "                ";
                }
                // line 136
                echo "                <span
                        ";
                // line 137
                echo $context["recipe_props"]->getrecipe_attr("itemprop", "calories", ($context["amp_on"] ?? null));
                echo ">";
                echo twig_escape_filter($this->env, ($context["calories"] ?? null), "html", null, true);
                echo "</span>
              </p>
            ";
            }
            // line 140
            echo "
            ";
            // line 141
            if (($context["fat"] ?? null)) {
                // line 142
                echo "              <p id=\"zlrecipe-fat\">
                ";
                // line 143
                if ((($context["fat_label_hide"] ?? null) != "Hide")) {
                    // line 144
                    echo "                  ";
                    echo __("Fat per serving:", 'zip-recipes');
                    // line 145
                    echo "                ";
                }
                // line 146
                echo "                <span
                        ";
                // line 147
                echo $context["recipe_props"]->getrecipe_attr("itemprop", "fatContent", ($context["amp_on"] ?? null));
                echo ">";
                echo twig_escape_filter($this->env, ($context["fat"] ?? null), "html", null, true);
                echo "</span>
              </p>
            ";
            }
            // line 150
            echo "
            ";
            // line 151
            if (($context["saturated_fat"] ?? null)) {
                // line 152
                echo "              <p id=\"zlrecipe-saturated-fat\">
                ";
                // line 153
                if ((($context["saturated_fat_label_hide"] ?? null) != "Hide")) {
                    // line 154
                    echo "                  ";
                    echo __("Saturated fat per serving:", 'zip-recipes');
                    // line 155
                    echo "                ";
                }
                // line 156
                echo "                <span
                        ";
                // line 157
                echo $context["recipe_props"]->getrecipe_attr("itemprop", "saturatedFatContent", ($context["amp_on"] ?? null));
                echo ">";
                echo twig_escape_filter($this->env, ($context["saturated_fat"] ?? null), "html", null, true);
                echo "</span>
              </p>
            ";
            }
            // line 160
            echo "
            ";
            // line 161
            if (($context["carbs"] ?? null)) {
                // line 162
                echo "              <p id=\"zlrecipe-carbs\">
                ";
                // line 163
                if ((($context["carbs_label_hide"] ?? null) != "Hide")) {
                    // line 164
                    echo "                  ";
                    echo __("Carbs per serving:", 'zip-recipes');
                    // line 165
                    echo "                ";
                }
                // line 166
                echo "                <span
                        ";
                // line 167
                echo $context["recipe_props"]->getrecipe_attr("itemprop", "carbohydrateContent", ($context["amp_on"] ?? null));
                echo ">";
                echo twig_escape_filter($this->env, ($context["carbs"] ?? null), "html", null, true);
                echo "</span>
              </p>
            ";
            }
            // line 170
            echo "
            ";
            // line 171
            if (($context["protein"] ?? null)) {
                // line 172
                echo "              <p id=\"zlrecipe-protein\">
                ";
                // line 173
                if ((($context["protein_label_hide"] ?? null) != "Hide")) {
                    // line 174
                    echo "                  ";
                    echo __("Protein per serving:", 'zip-recipes');
                    // line 175
                    echo "                ";
                }
                // line 176
                echo "                <span
                        ";
                // line 177
                echo $context["recipe_props"]->getrecipe_attr("itemprop", "proteinContent", ($context["amp_on"] ?? null));
                echo ">";
                echo twig_escape_filter($this->env, ($context["protein"] ?? null), "html", null, true);
                echo "</span>
              </p>
            ";
            }
            // line 180
            echo "
            ";
            // line 181
            if (($context["fiber"] ?? null)) {
                // line 182
                echo "              <p id=\"zlrecipe-fiber\">
                ";
                // line 183
                if ((($context["fiber_label_hide"] ?? null) != "Hide")) {
                    // line 184
                    echo "                  ";
                    echo __("Fiber per serving:", 'zip-recipes');
                    // line 185
                    echo "                ";
                }
                // line 186
                echo "                <span
                        ";
                // line 187
                echo $context["recipe_props"]->getrecipe_attr("itemprop", "fiberContent", ($context["amp_on"] ?? null));
                echo ">";
                echo twig_escape_filter($this->env, ($context["fiber"] ?? null), "html", null, true);
                echo "</span>
              </p>
            ";
            }
            // line 190
            echo "
            ";
            // line 191
            if (($context["sugar"] ?? null)) {
                // line 192
                echo "              <p id=\"zlrecipe-sugar\">
                ";
                // line 193
                if ((($context["sugar_label_hide"] ?? null) != "Hide")) {
                    // line 194
                    echo "                  ";
                    echo __("Sugar per serving:", 'zip-recipes');
                    // line 195
                    echo "                ";
                }
                // line 196
                echo "                <span
                        ";
                // line 197
                echo $context["recipe_props"]->getrecipe_attr("itemprop", "sugarContent", ($context["amp_on"] ?? null));
                echo ">";
                echo twig_escape_filter($this->env, ($context["sugar"] ?? null), "html", null, true);
                echo "</span>
              </p>
            ";
            }
            // line 200
            echo "
            ";
            // line 201
            if (($context["sodium"] ?? null)) {
                // line 202
                echo "              <p id=\"zlrecipe-sodium\">
                ";
                // line 203
                if ((($context["sodium_label_hide"] ?? null) != "Hide")) {
                    // line 204
                    echo "                  ";
                    echo __("Sodium per serving:", 'zip-recipes');
                    // line 205
                    echo "                ";
                }
                // line 206
                echo "                <span
                        ";
                // line 207
                echo $context["recipe_props"]->getrecipe_attr("itemprop", "sodiumContent", ($context["amp_on"] ?? null));
                echo ">";
                echo twig_escape_filter($this->env, ($context["sodium"] ?? null), "html", null, true);
                echo "</span>
              </p>
            ";
            }
            // line 210
            echo "                
            ";
            // line 211
            if (($context["trans_fat"] ?? null)) {
                // line 212
                echo "              <p id=\"zlrecipe-trans_fat\">
                ";
                // line 213
                if ((($context["trans_fat_label_hide"] ?? null) != "Hide")) {
                    // line 214
                    echo "                  ";
                    echo __("Trans fat per serving:", 'zip-recipes');
                    // line 215
                    echo "                ";
                }
                // line 216
                echo "                <span
                        ";
                // line 217
                echo $context["recipe_props"]->getrecipe_attr("itemprop", "transfatContent", ($context["amp_on"] ?? null));
                echo ">";
                echo twig_escape_filter($this->env, ($context["trans_fat"] ?? null), "html", null, true);
                echo "</span>
              </p>
            ";
            }
            // line 220
            echo "                
            ";
            // line 221
            if (($context["cholesterol"] ?? null)) {
                // line 222
                echo "              <p id=\"zlrecipe-cholesterol\">
                ";
                // line 223
                if ((($context["cholesterol_label_hide"] ?? null) != "Hide")) {
                    // line 224
                    echo "                  ";
                    echo __("Cholesterol per serving:", 'zip-recipes');
                    // line 225
                    echo "                ";
                }
                // line 226
                echo "                <span
                        ";
                // line 227
                echo $context["recipe_props"]->getrecipe_attr("itemprop", "cholesterolContent", ($context["amp_on"] ?? null));
                echo ">";
                echo twig_escape_filter($this->env, ($context["cholesterol"] ?? null), "html", null, true);
                echo "</span>
              </p>
            ";
            }
            // line 230
            echo "
          </div>
        ";
        }
        // line 233
        echo "
        ";
        // line 235
        echo "      </div>
      <div class=\"zlclear\">
      </div>
    </div>

    ";
        // line 241
        echo "    ";
        if ((($context["recipe_image"] ?? null) || ($context["summary"] ?? null))) {
            // line 242
            echo "      <div class=\"img-desc-wrap\">
        ";
            // line 243
            if (($context["recipe_image"] ?? null)) {
                // line 244
                echo "          <p class=\"t-a-c ";
                if ((($context["image_hide"] ?? null) == "Hide")) {
                    echo "hide-card";
                }
                echo " ";
                if ((($context["image_hide_print"] ?? null) == "Hide")) {
                    echo "hide-print";
                }
                echo "\">
            <img class=\"photo\"
                    ";
                // line 246
                echo $context["recipe_props"]->getrecipe_attr("itemprop", "image", ($context["amp_on"] ?? null));
                echo " src=\"";
                echo twig_escape_filter($this->env, ($context["image"] ?? null), "html", null, true);
                echo "\" title=\"";
                echo twig_escape_filter($this->env, ($context["recipe_title"] ?? null), "html", null, true);
                echo "\"
                 alt=\"";
                // line 247
                echo twig_escape_filter($this->env, ($context["recipe_title"] ?? null), "html", null, true);
                echo "\"
                 ";
                // line 248
                if (($context["image_width"] ?? null)) {
                    echo "style=\"width: ";
                    echo twig_escape_filter($this->env, ($context["image_width"] ?? null), "html", null, true);
                    echo "px;\"";
                }
                echo " />
          </p>
        ";
            }
            // line 251
            echo "
        ";
            // line 252
            if (($context["summary"] ?? null)) {
                // line 253
                echo "          <div id=\"zlrecipe-summary\"
                ";
                // line 254
                echo $context["recipe_props"]->getrecipe_attr("itemprop", "description", ($context["amp_on"] ?? null));
                echo ">
            ";
                // line 255
                echo ($context["summary_rich"] ?? null);
                echo "
          </div>
        ";
            }
            // line 258
            echo "      </div>
    ";
        }
        // line 260
        echo "
    ";
        // line 262
        echo "    ";
        // line 263
        echo "    ";
        // line 264
        echo "    ";
        if ((($context["ingredient_label_hide"] ?? null) != "Hide")) {
            // line 265
            echo "      <p id=\"zlrecipe-ingredients\" class=\"h-4 strong\">
        ";
            // line 266
            echo __("Ingredients", 'zip-recipes');
            // line 267
            echo "      </p>
    ";
        }
        // line 269
        echo "
    ";
        // line 270
        $context["ingredientsHtmlListElem"] = ($context["ingredient_list_type"] ?? null);
        // line 271
        echo "    ";
        // line 272
        echo "    ";
        if ((($context["ingredient_list_type"] ?? null) == "l")) {
            $context["ingredientsHtmlListElem"] = "ul";
        }
        // line 273
        echo "    ";
        if (((($context["ingredient_list_type"] ?? null) == "p") || (($context["ingredient_list_type"] ?? null) == "div"))) {
            $context["ingredientsHtmlListElem"] = "span";
        }
        // line 274
        echo "
    ";
        // line 275
        $context["ingredientsHtmlListChildElem"] = "li";
        // line 276
        echo "    ";
        if ((($context["ingredient_list_type"] ?? null) == "p")) {
            $context["ingredientsHtmlListChildElem"] = "p";
        }
        // line 277
        echo "    ";
        if ((($context["ingredient_list_type"] ?? null) == "div")) {
            $context["ingredientsHtmlListChildElem"] = "div";
        }
        // line 278
        echo "
    ";
        // line 279
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["nested_ingredients"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["ingredient_list"]) {
            // line 280
            echo "      <";
            echo twig_escape_filter($this->env, ($context["ingredientsHtmlListElem"] ?? null), "html", null, true);
            echo " id=\"zlrecipe-ingredients-list\">
        ";
            // line 281
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["ingredient_list"]);
            foreach ($context['_seq'] as $context["_key"] => $context["ingredient"]) {
                // line 282
                echo "          ";
                if (($this->getAttribute($context["ingredient"], "type", array()) == "image")) {
                    // line 283
                    echo "            <img class=\"";
                    if (($context["image_hide_print"] ?? null)) {
                        echo "hide-print";
                    }
                    echo " ";
                    if (($context["image_hide"] ?? null)) {
                        echo "hide-card";
                    }
                    echo "\" src=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["ingredient"], "content", array()), "html", null, true);
                    echo "\" />
          ";
                } elseif (($this->getAttribute(                // line 284
$context["ingredient"], "type", array()) == "subtitle")) {
                    // line 285
                    echo "            ";
                    // line 286
                    echo "            ";
                    // line 287
                    echo "            <div class=\"";
                    if ((($context["ingredient_list_type"] ?? null) == "l")) {
                        echo "ingredient no-bullet-label";
                    } else {
                        echo "ingredient-label";
                    }
                    echo "\">
              ";
                    // line 288
                    echo $this->getAttribute($context["ingredient"], "content", array());
                    echo "
            </div>
          ";
                } else {
                    // line 291
                    echo "            <";
                    echo twig_escape_filter($this->env, ($context["ingredientsHtmlListChildElem"] ?? null), "html", null, true);
                    echo " class=\"ingredient ";
                    if ((($context["ingredient_list_type"] ?? null) == "l")) {
                        echo "no-bullet";
                    }
                    echo "\"
              ";
                    // line 292
                    echo $context["recipe_props"]->getrecipe_attr("itemprop", "recipeIngredient", ($context["amp_on"] ?? null));
                    echo ">
              ";
                    // line 293
                    echo $this->getAttribute($context["ingredient"], "content", array());
                    echo "
            </";
                    // line 294
                    echo twig_escape_filter($this->env, ($context["ingredientsHtmlListChildElem"] ?? null), "html", null, true);
                    echo ">
          ";
                }
                // line 296
                echo "        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ingredient'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 297
            echo "      </";
            echo twig_escape_filter($this->env, ($context["ingredientsHtmlListElem"] ?? null), "html", null, true);
            echo ">
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ingredient_list'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 299
        echo "
    ";
        // line 301
        echo "    ";
        // line 302
        echo "    ";
        // line 303
        echo "    ";
        if ((($context["instruction_label_hide"] ?? null) != "Hide")) {
            // line 304
            echo "      <p id=\"zlrecipe-instructions\" class=\"h-4 strong\">";
            echo __("Instructions", 'zip-recipes');
            echo "</p>
    ";
        }
        // line 306
        echo "
    ";
        // line 307
        $context["instructionsHtmlListElem"] = ($context["instruction_list_type"] ?? null);
        // line 308
        echo "    ";
        // line 309
        echo "    ";
        if ((($context["instruction_list_type"] ?? null) == "l")) {
            $context["instructionsHtmlListElem"] = "ul";
        }
        // line 310
        echo "    ";
        if (((($context["instruction_list_type"] ?? null) == "p") || (($context["instruction_list_type"] ?? null) == "div"))) {
            $context["instructionsHtmlListElem"] = "span";
        }
        // line 311
        echo "
    ";
        // line 313
        echo "    ";
        $context["instructionsHtmlChildElem"] = "li";
        // line 314
        echo "    ";
        if ((($context["ingredient_list_type"] ?? null) == "p")) {
            $context["instructionsHtmlChildElem"] = "p";
        }
        // line 315
        echo "    ";
        if ((($context["ingredient_list_type"] ?? null) == "div")) {
            $context["instructionsHtmlChildElem"] = "div";
        }
        // line 316
        echo "
    ";
        // line 317
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["nested_instructions"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["instruction_list"]) {
            // line 318
            echo "        <";
            echo twig_escape_filter($this->env, ($context["instructionsHtmlListElem"] ?? null), "html", null, true);
            echo " id=\"zlrecipe-instructions-list\" class=\"instructions\">
        ";
            // line 319
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["instruction_list"]);
            foreach ($context['_seq'] as $context["_key"] => $context["instruction"]) {
                // line 320
                echo "          ";
                if (($this->getAttribute($context["instruction"], "type", array()) == "image")) {
                    // line 321
                    echo "            <img class=\"";
                    if (($context["image_hide_print"] ?? null)) {
                        echo "hide-print";
                    }
                    echo " ";
                    if (($context["image_hide"] ?? null)) {
                        echo "hide-card";
                    }
                    echo "\" src=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["instruction"], "content", array()), "html", null, true);
                    echo "\" />
          ";
                } elseif (($this->getAttribute(                // line 322
$context["instruction"], "type", array()) == "subtitle")) {
                    // line 323
                    echo "            ";
                    // line 324
                    echo "            ";
                    // line 325
                    echo "            <div class=\"";
                    if ((($context["instruction_list_type"] ?? null) == "l")) {
                        echo "instruction no-bullet-label";
                    } else {
                        echo "instruction-label";
                    }
                    echo "\">
              ";
                    // line 326
                    echo $this->getAttribute($context["instruction"], "content", array());
                    echo "
            </div>
          ";
                } else {
                    // line 329
                    echo "            <";
                    echo twig_escape_filter($this->env, ($context["instructionsHtmlChildElem"] ?? null), "html", null, true);
                    echo " class=\"instruction ";
                    if ((($context["instruction_list_type"] ?? null) == "l")) {
                        echo "no-bullet";
                    }
                    echo "\"
              ";
                    // line 330
                    echo $context["recipe_props"]->getrecipe_attr("itemprop", "recipeInstructions", ($context["amp_on"] ?? null));
                    echo ">
            ";
                    // line 331
                    echo $this->getAttribute($context["instruction"], "content", array());
                    echo "
            </";
                    // line 332
                    echo twig_escape_filter($this->env, ($context["instructionsHtmlChildElem"] ?? null), "html", null, true);
                    echo ">
          ";
                }
                // line 334
                echo "        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['instruction'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 335
            echo "      </";
            echo twig_escape_filter($this->env, ($context["instructionsHtmlListElem"] ?? null), "html", null, true);
            echo ">
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['instruction_list'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 337
        echo "

    ";
        // line 340
        echo "    ";
        if (($context["notes"] ?? null)) {
            // line 341
            echo "      ";
            if ((($context["notes_label_hide"] ?? null) != "Hide")) {
                // line 342
                echo "        <p id=\"zlrecipe-notes\" class=\"h-4 strong\">";
                echo __("Notes", 'zip-recipes');
                echo "</p>
      ";
            }
            // line 344
            echo "      <div id=\"zlrecipe-notes-list\">
       ";
            // line 345
            echo ($context["formatted_notes"] ?? null);
            echo "
      </div>
    ";
        }
        // line 348
        echo "    ";
        echo ($context["nutrition_label"] ?? null);
        echo "

    ";
        // line 351
        echo "    ";
        if ((($context["attribution_hide"] ?? null) != "Hide")) {
            // line 352
            echo "      <div class=\"zl-linkback\">Recipe Management Powered by <a title=\"Zip Recipes Plugin\" href=\"https://www.ziprecipes.net\" target=\"_blank\">Zip Recipes Plugin</a></div>
    ";
        }
        // line 354
        echo "    <div class=\"ziprecipes-plugin\" style=\"display: none;\">";
        echo twig_escape_filter($this->env, ($context["version"] ?? null), "html", null, true);
        echo "</div>

    ";
        // line 357
        echo "    ";
        if ((($context["print_permalink_hide"] ?? null) != "Hide")) {
            // line 358
            echo "      <a id=\"zl-printed-permalink\" href=\"";
            echo twig_escape_filter($this->env, ($context["permalink"] ?? null), "html", null, true);
            echo "\" title=\"Permalink to Recipe\">";
            echo twig_escape_filter($this->env, ($context["permalink"] ?? null), "html", null, true);
            echo "</a>
    ";
        }
        // line 360
        echo "  </div>

  ";
        // line 363
        echo "  ";
        if (($context["copyright"] ?? null)) {
            // line 364
            echo "    <div id=\"zl-printed-copyright-statement\"
            ";
            // line 365
            echo $context["recipe_props"]->getrecipe_attr("itemprop", "copyrightHolder", ($context["amp_on"] ?? null));
            echo ">";
            echo twig_escape_filter($this->env, ($context["copyright"] ?? null), "html", null, true);
            echo "</div>
  ";
        }
        // line 367
        echo "  </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "recipe.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1065 => 367,  1058 => 365,  1055 => 364,  1052 => 363,  1048 => 360,  1040 => 358,  1037 => 357,  1031 => 354,  1027 => 352,  1024 => 351,  1018 => 348,  1012 => 345,  1009 => 344,  1003 => 342,  1000 => 341,  997 => 340,  993 => 337,  984 => 335,  978 => 334,  973 => 332,  969 => 331,  965 => 330,  956 => 329,  950 => 326,  941 => 325,  939 => 324,  937 => 323,  935 => 322,  922 => 321,  919 => 320,  915 => 319,  910 => 318,  906 => 317,  903 => 316,  898 => 315,  893 => 314,  890 => 313,  887 => 311,  882 => 310,  877 => 309,  875 => 308,  873 => 307,  870 => 306,  864 => 304,  861 => 303,  859 => 302,  857 => 301,  854 => 299,  845 => 297,  839 => 296,  834 => 294,  830 => 293,  826 => 292,  817 => 291,  811 => 288,  802 => 287,  800 => 286,  798 => 285,  796 => 284,  783 => 283,  780 => 282,  776 => 281,  771 => 280,  767 => 279,  764 => 278,  759 => 277,  754 => 276,  752 => 275,  749 => 274,  744 => 273,  739 => 272,  737 => 271,  735 => 270,  732 => 269,  728 => 267,  726 => 266,  723 => 265,  720 => 264,  718 => 263,  716 => 262,  713 => 260,  709 => 258,  703 => 255,  699 => 254,  696 => 253,  694 => 252,  691 => 251,  681 => 248,  677 => 247,  669 => 246,  657 => 244,  655 => 243,  652 => 242,  649 => 241,  642 => 235,  639 => 233,  634 => 230,  626 => 227,  623 => 226,  620 => 225,  617 => 224,  615 => 223,  612 => 222,  610 => 221,  607 => 220,  599 => 217,  596 => 216,  593 => 215,  590 => 214,  588 => 213,  585 => 212,  583 => 211,  580 => 210,  572 => 207,  569 => 206,  566 => 205,  563 => 204,  561 => 203,  558 => 202,  556 => 201,  553 => 200,  545 => 197,  542 => 196,  539 => 195,  536 => 194,  534 => 193,  531 => 192,  529 => 191,  526 => 190,  518 => 187,  515 => 186,  512 => 185,  509 => 184,  507 => 183,  504 => 182,  502 => 181,  499 => 180,  491 => 177,  488 => 176,  485 => 175,  482 => 174,  480 => 173,  477 => 172,  475 => 171,  472 => 170,  464 => 167,  461 => 166,  458 => 165,  455 => 164,  453 => 163,  450 => 162,  448 => 161,  445 => 160,  437 => 157,  434 => 156,  431 => 155,  428 => 154,  426 => 153,  423 => 152,  421 => 151,  418 => 150,  410 => 147,  407 => 146,  404 => 145,  401 => 144,  399 => 143,  396 => 142,  394 => 141,  391 => 140,  383 => 137,  380 => 136,  377 => 135,  374 => 134,  372 => 133,  369 => 132,  367 => 131,  364 => 130,  356 => 127,  353 => 126,  350 => 125,  347 => 124,  345 => 123,  342 => 122,  340 => 121,  335 => 119,  331 => 118,  327 => 117,  324 => 116,  322 => 115,  319 => 114,  310 => 111,  307 => 110,  304 => 109,  302 => 108,  299 => 107,  297 => 106,  294 => 105,  289 => 101,  284 => 98,  281 => 97,  275 => 94,  271 => 93,  267 => 92,  264 => 91,  261 => 90,  258 => 89,  256 => 88,  253 => 87,  251 => 86,  247 => 84,  241 => 82,  237 => 81,  233 => 80,  230 => 79,  227 => 78,  224 => 77,  222 => 76,  219 => 75,  217 => 74,  214 => 73,  208 => 70,  204 => 69,  200 => 68,  197 => 67,  194 => 66,  191 => 65,  189 => 64,  186 => 63,  184 => 62,  181 => 61,  175 => 58,  171 => 57,  167 => 56,  164 => 55,  161 => 54,  158 => 53,  156 => 52,  153 => 51,  151 => 50,  148 => 49,  142 => 46,  138 => 45,  134 => 44,  131 => 43,  128 => 42,  125 => 41,  123 => 40,  120 => 39,  117 => 38,  112 => 35,  108 => 33,  98 => 29,  94 => 28,  91 => 27,  88 => 25,  84 => 23,  80 => 21,  78 => 20,  69 => 19,  63 => 16,  54 => 15,  52 => 14,  49 => 13,  46 => 12,  38 => 6,  34 => 5,  24 => 4,  21 => 3,  19 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "recipe.twig", "/Users/Fireandsurf/Sites/natroseblog/wp-content/plugins/zip-recipes/views/recipe.twig");
    }
}
