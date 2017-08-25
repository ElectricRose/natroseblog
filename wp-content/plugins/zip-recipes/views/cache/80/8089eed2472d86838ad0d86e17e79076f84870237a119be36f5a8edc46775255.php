<?php

/* create-update-recipe.twig */
class __TwigTemplate_76fa34563aa5c031a4b5c0f60f8d3982fc5ddc21a3099543f79c977cb0d01911 extends Twig_Template
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
        // line 1
        echo "<!DOCTYPE html>
<!--suppress HtmlUnknownTarget -->
<head>
    <link rel=\"stylesheet\" href=\"";
        // line 4
        echo twig_escape_filter($this->env, ($context["pluginurl"] ?? null), "html", null, true);
        echo "/styles/zlrecipe-dlog.css\" type=\"text/css\" media=\"all\" />
    <script type=\"text/javascript\" src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js\"></script>
    <script type=\"text/javascript\">
        var args = top.tinymce.activeEditor.windowManager.getParams();
        var editor = args['editor'];
        function amdZLRecipeSubmitForm() {
            var title = document.forms['recipe_form']['recipe_title'].value;

            if (title == null || title == '') {
                var jQrecipeTitle = \$('#recipe-title');
                jQrecipeTitle.find('input').addClass('input-error');
                jQrecipeTitle.append('<p class=\"error-message\">You must enter a title for your recipe.</p>');

                return false;
            }

            var jQingredients = \$('#z_recipe_ingredients');
            var jQingredientsTextarea = jQingredients.find('textarea');
            var ingredients = jQingredientsTextarea.val();
            if (ingredients == null || ingredients == '' || ingredients == undefined) {
                jQingredientsTextarea.addClass('input-error');
                jQingredients.append('<p class=\"error-message\">You must enter at least one ingredient.</p>');

                return false;
            }
            var shortcode = '[amd-zlrecipe-recipe:";
        // line 29
        echo twig_escape_filter($this->env, ($context["recipe_id"] ?? null), "html", null, true);
        echo "]';
            editor.execCommand('mceInsertContent', false, shortcode);
            top.tinymce.activeEditor.windowManager.close(window);
        }

        \$(document).ready(function () {
            \$('#more-options').hide();
            \$('#more-options-toggle').click(function () {
                if (\$('#more-options').is(':visible')) {
                    \$('#more-options').hide(400);
                    \$('#more-options-toggle').html('More options');
                }
                else {
                    \$('#more-options').show(400);
                    \$('#more-options-toggle').html('Less options');
                }

                return false;
            });

            \$('#upload-btn').click(function (e) {
                e.preventDefault();
                window.parent.zrdnAddImageHandler(zrdnRecipeImageSelected);
            });

            \$('#skip-button').click(function (e) {
                e.preventDefault();
                Cookies.set('skip-registration', 1, {expires: 7, path: '/'});
                \$(this).closest('form').remove();
            });

            var recipe_image_url = \$('#recipe_image').val();
            if (recipe_image_url)
            {
                zrdnRecipeImageSelected({url: recipe_image_url});
            }

            // Set focus to ingredients because in WP4.3 focus remains in the tinyMCE editor
            \$ingredients = \$('#ingredients');
            \$ingredients.focus();

            // Set data-caption attr of summary textarea to false if user types in it or if there's text in it.
            var \$recipeSummaryTextarea = \$('textarea#summary');
            \$recipeSummaryTextarea.keyup(function ()
            {
                \$recipeSummaryTextarea.data('caption', 'false');
            });
            if (\$recipeSummaryTextarea.val())
            {
                \$recipeSummaryTextarea.data('caption', 'false');
            }

        });


        function zrdnRecipeImageSelected(imageData) {
            // This will return the selected image from the Media Uploader, the result is an object

            // Get image container
            // Show it
            // Set \$image src to url
            // scale image
            if (imageData.url)
            {
                var \$imageContainer = \$('#recipe-image-preview-container'),
                        \$uploadImageContainer = \$('#upload-recipe-image-button-container');

                // Set UI state
                \$imageContainer.show();
                \$uploadImageContainer.hide();

                \$('#recipe_image').val(imageData.url);

                var \$image = \$('#recipe-image-preview').
                        attr('src', imageData.url);

                var defaultHeight = 100;

                // width seems to be set proportionally!
                \$image.height(defaultHeight);

                // Set Recipe Summary to image caption if image caption exists and
                //  if data-caption attr of summary textarea is true
                var \$recipeSummaryTextarea = \$('textarea#summary');
                if (imageData.caption && \$recipeSummaryTextarea.data('caption') === true)
                {
                    \$recipeSummaryTextarea.val(imageData.caption);
                    \$('#more-options').show(400);
                }
            }
        }


        function zrdnResetImage()
        {
            var \$imageContainer = \$('#recipe-image-preview-container'),
                    \$uploadImageContainer = \$('#upload-recipe-image-button-container');

            \$imageContainer.hide();
            \$uploadImageContainer.show();

            \$('#recipe_image').val('');
        }
    </script>
    ";
        // line 133
        echo ($context["header_tags"] ?? null);
        echo "
    ";
        // line 134
        if (($context["post_info"] ?? null)) {
            // line 135
            echo "        <script>window.onload = amdZLRecipeSubmitForm;</script>
    ";
        }
        // line 137
        echo "</head>

<body id=\"amd-zlrecipe-uploader\">
    ";
        // line 141
        echo "        <form enctype='multipart/form-data' method='post' action='' name='recipe_form'>
            ";
        // line 142
        if (($context["registration_required"] ?? null)) {
            // line 143
            echo "                <h3 >Please <a href=\"";
            echo ($context["recipe_url"] ?? null);
            echo "&register=1\">register</a> ZipRecipes plugin, it is free.</h3>
            ";
        }
        // line 145
        echo "            <h3 class='amd-zlrecipe-title'>";
        echo ($context["iframe_title"] ?? null);
        echo "</h3>
            <div id='amd-zlrecipe-form-items'>
                <input type='hidden' name='recipe_post_id' value='";
        // line 147
        echo ($context["id"] ?? null);
        echo "' />
                <input type='hidden' name='recipe_id' value='";
        // line 148
        echo ($context["recipe_id"] ?? null);
        echo "' />
                <p id='recipe-title'><label for='recipe_title'>Title <span class='required'>*</span></label> <input type='text' id='recipe_title' name='recipe_title' value='";
        // line 149
        echo ($context["recipe_title"] ?? null);
        echo "' /></p>
                <p id='recipe-image'>
                <div style=\"float:left; margin-left: 16px;\">
                    <label>Image</label>
                    <input type='hidden' id=\"recipe_image\" name='recipe_image' value='";
        // line 153
        echo ($context["recipe_image"] ?? null);
        echo "' />
                </div>
                <div id=\"upload-recipe-image-button-container\" style=\"float: left; margin-left: 25px; padding-top: 5px;\">
                    <a id=\"upload-btn\" href=\"#\">Add Image</a>
                </div>
                <div id=\"recipe-image-preview-container\" style=\"display: none; float: left; margin-left: 25px; text-align: center;\">
                    <img id=\"recipe-image-preview\" src=\"\" style=\"display: block\" />
                    <a href=\"javascript:zrdnResetImage()\">Remove Image</a>
                </div>
                </p>
                <div style=\"clear: both\"></div>
                ";
        // line 164
        echo ($context["author_section"] ?? null);
        echo "
                <p id='z_recipe_ingredients' class='cls'>
                    <label>Ingredients
                        <span class='required'>*</span>
                        <small>Put each ingredient on a separate line.  There is no need to use bullets for your ingredients.</small>
                        <small>You can also create labels, hyperlinks, bold/italic effects and even add images!
                            <a href=\"https://www.ziprecipes.net/wp-content/uploads/2014/12/plugin-instructions-4.0.0.9.pdf\" target=\"_blank\">Learn how here</a>
                        </small>
                    </label>
                    <textarea name='ingredients' id='ingredients'>";
        // line 173
        echo ($context["ingredients"] ?? null);
        echo "</textarea>
                </p>
                <p id='amd-zlrecipe-instructions' class='cls'>
                    <label>Instructions
                        <small>Press return after each instruction. There is no need to number your instructions.</small>
                        <small>You can also create labels, hyperlinks, bold/italic effects and even add images!
                            <a href=\"https://www.ziprecipes.net/wp-content/uploads/2014/12/plugin-instructions-4.0.0.9.pdf\" target=\"_blank\">Learn how here</a>
                        </small>
                    </label>
                    <textarea name='instructions'>";
        // line 182
        echo ($context["instructions"] ?? null);
        echo "</textarea>
                </p>
                ";
        // line 184
        echo ($context["yield_section"] ?? null);
        echo "
                <p><a href='#' id='more-options-toggle'>More options</a></p>
                <div id='more-options'>
                    <p><label>Category</label> <input placeholder=\"e.g. appetizer, entree, etc.\" type='text' name='category' value='";
        // line 187
        echo ($context["category"] ?? null);
        echo "' /></p>
                    <p><label>Cuisine</label> <input placeholder=\"e.g. French, Ethiopian, etc.\" type='text' name='cuisine' value='";
        // line 188
        echo ($context["cuisine"] ?? null);
        echo "' /></p>
                    <p class='cls'><label>Summary</label>
                        <textarea id='summary' name='summary' data-caption=\"true\">";
        // line 190
        echo ($context["summary"] ?? null);
        echo "</textarea></p>
                    <p class=\"cls\"><label>Prep Time</label>
                        ";
        // line 192
        echo ($context["prep_time_input"] ?? null);
        echo "
                        <span class=\"time\">
                            <span><input type='number' min=\"0\" max=\"24\" name='prep_time_hours' value='";
        // line 194
        echo ($context["prep_time_hours"] ?? null);
        echo "' /><label>hours</label></span>
                            <span><input type='number' min=\"0\" max=\"60\" name='prep_time_minutes' value='";
        // line 195
        echo ($context["prep_time_minutes"] ?? null);
        echo "' /><label>minutes</label></span>
                        </span>
                    </p>
                    <p class=\"cls\"><label>Cook Time</label>
                        ";
        // line 199
        echo ($context["cook_time_input"] ?? null);
        echo "
                        <span class=\"time\">
                            <span><input type='number' min=\"0\" max=\"24\" name='cook_time_hours' value='";
        // line 201
        echo ($context["cook_time_hours"] ?? null);
        echo "' /><label>hours</label></span>
                            <span><input type='number' min=\"0\" max=\"60\" name='cook_time_minutes' value='";
        // line 202
        echo ($context["cook_time_minutes"] ?? null);
        echo "' /><label>minutes</label></span>
                        </span>
                    </p>
                    <p class=\"cls\"><label>Total Time</label>
                        ";
        // line 206
        echo ($context["total_time_input"] ?? null);
        echo "
                        <span class=\"time\">
                            <span><input type='number' min=\"0\" max=\"24\" name='total_time_hours' value='";
        // line 208
        echo ($context["total_time_hours"] ?? null);
        echo "' /><label>hours</label></span>
                            <span><input type='number' min=\"0\" max=\"60\" name='total_time_minutes' value='";
        // line 209
        echo ($context["total_time_minutes"] ?? null);
        echo "' /><label>minutes</label></span>
                        </span>
                    </p>
                    <p><label>Serving Size</label> <input type='text' name='serving_size' value='";
        // line 212
        echo ($context["serving_size"] ?? null);
        echo "' /></p>
                    <p><label>Calories</label> <input type='text' name='calories' value='";
        // line 213
        echo ($context["calories"] ?? null);
        echo "' /></p>
                    <p><label>Carbs</label> <input type='text' name='carbs' value='";
        // line 214
        echo ($context["carbs"] ?? null);
        echo "' /></p>
                    <p><label>Protein</label> <input type='text' name='protein' value='";
        // line 215
        echo ($context["protein"] ?? null);
        echo "' /></p>
                    <p><label>Fiber</label> <input type='text' name='fiber' value='";
        // line 216
        echo ($context["fiber"] ?? null);
        echo "' /></p>
                    <p><label>Sugar</label> <input type='text' name='sugar' value='";
        // line 217
        echo ($context["sugar"] ?? null);
        echo "' /></p>
                    <p><label>Sodium</label> <input type='text' name='sodium' value='";
        // line 218
        echo ($context["sodium"] ?? null);
        echo "' /></p>
                    <p><label>Fat</label> <input type='text' name='fat' value='";
        // line 219
        echo ($context["fat"] ?? null);
        echo "' /></p>
                    <p><label>Saturated fat</label> <input type='text' name='saturated_fat' value='";
        // line 220
        echo ($context["saturated_fat"] ?? null);
        echo "' /></p>
                    <p><label>Trans. Fat</label> <input type='text' name='trans_fat' value='";
        // line 221
        echo ($context["trans_fat"] ?? null);
        echo "' /></p>
                    <p><label>Cholesterol</label> <input type='text' name='cholesterol' value='";
        // line 222
        echo ($context["cholesterol"] ?? null);
        echo "' /></p>
                    <p class='cls'><label>Notes</label> <textarea name='notes'>";
        // line 223
        echo ($context["notes"] ?? null);
        echo "</textarea></p>
                </div>
                <input type='submit' value='";
        // line 225
        echo ($context["submit"] ?? null);
        echo "' name='add-recipe-button' />
            </div>
        </form>
    ";
        // line 229
        echo "</body>
";
    }

    public function getTemplateName()
    {
        return "create-update-recipe.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  371 => 229,  365 => 225,  360 => 223,  356 => 222,  352 => 221,  348 => 220,  344 => 219,  340 => 218,  336 => 217,  332 => 216,  328 => 215,  324 => 214,  320 => 213,  316 => 212,  310 => 209,  306 => 208,  301 => 206,  294 => 202,  290 => 201,  285 => 199,  278 => 195,  274 => 194,  269 => 192,  264 => 190,  259 => 188,  255 => 187,  249 => 184,  244 => 182,  232 => 173,  220 => 164,  206 => 153,  199 => 149,  195 => 148,  191 => 147,  185 => 145,  179 => 143,  177 => 142,  174 => 141,  169 => 137,  165 => 135,  163 => 134,  159 => 133,  52 => 29,  24 => 4,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "create-update-recipe.twig", "/Users/Fireandsurf/Sites/natroseblog/wp-content/plugins/zip-recipes/views/create-update-recipe.twig");
    }
}
