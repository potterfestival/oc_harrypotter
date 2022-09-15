<?php

/**
 * @file
 * Default theme implementation to display a node.
 *
 * Available variables:
 * - $title: the (sanitized) title of the node.
 * - $content: An array of node items. Use render($content) to print them all,
 *   or print a subset such as render($content['field_example']). Use
 *   hide($content['field_example']) to temporarily suppress the printing of a
 *   given element.
 * - $user_picture: The node author's picture from user-picture.tpl.php.
 * - $date: Formatted creation date. Preprocess functions can reformat it by
 *   calling format_date() with the desired parameters on the $created variable.
 * - $name: Themed username of node author output from theme_username().
 * - $node_url: Direct URL of the current node.
 * - $display_submitted: Whether submission information should be displayed.
 * - $submitted: Submission information created from $name and $date during
 *   template_preprocess_node().
 * - $classes: String of classes that can be used to style contextually through
 *   CSS. It can be manipulated through the variable $classes_array from
 *   preprocess functions. The default values can be one or more of the
 *   following:
 *   - node: The current template type; for example, "theming hook".
 *   - node-[type]: The current node type. For example, if the node is a
 *     "Blog entry" it would result in "node-blog". Note that the machine
 *     name will often be in a short form of the human readable label.
 *   - node-teaser: Nodes in teaser form.
 *   - node-preview: Nodes in preview mode.
 *   The following are controlled through the node publishing options.
 *   - node-promoted: Nodes promoted to the front page.
 *   - node-sticky: Nodes ordered above other non-sticky nodes in teaser
 *     listings.
 *   - node-unpublished: Unpublished nodes visible only to administrators.
 * - $title_prefix (array): An array containing additional output populated by
 *   modules, intended to be displayed in front of the main title tag that
 *   appears in the template.
 * - $title_suffix (array): An array containing additional output populated by
 *   modules, intended to be displayed after the main title tag that appears in
 *   the template.
 *
 * Other variables:
 * - $node: Full node object. Contains data that may not be safe.
 * - $type: Node type; for example, story, page, blog, etc.
 * - $comment_count: Number of comments attached to the node.
 * - $uid: User ID of the node author.
 * - $created: Time the node was published formatted in Unix timestamp.
 * - $classes_array: Array of html class attribute values. It is flattened
 *   into a string within the variable $classes.
 * - $zebra: Outputs either "even" or "odd". Useful for zebra striping in
 *   teaser listings.
 * - $id: Position of the node. Increments each time it's output.
 *
 * Node status variables:
 * - $view_mode: View mode; for example, "full", "teaser".
 * - $teaser: Flag for the teaser state (shortcut for $view_mode == 'teaser').
 * - $page: Flag for the full page state.
 * - $promote: Flag for front page promotion state.
 * - $sticky: Flags for sticky post setting.
 * - $status: Flag for published status.
 * - $comment: State of comment settings for the node.
 * - $readmore: Flags true if the teaser content of the node cannot hold the
 *   main body content.
 * - $is_front: Flags true when presented in the front page.
 * - $logged_in: Flags true when the current user is a logged-in member.
 * - $is_admin: Flags true when the current user is an administrator.
 *
 * Field variables: for each field instance attached to the node a corresponding
 * variable is defined; for example, $node->body becomes $body. When needing to
 * access a field's raw values, developers/themers are strongly encouraged to
 * use these variables. Otherwise they will have to explicitly specify the
 * desired field language; for example, $node->body['en'], thus overriding any
 * language negotiation rule that was previously applied.
 *
 * @see template_preprocess()
 * @see template_preprocess_node()
 * @see template_process()
 *
 * @ingroup themeable
 */
?>
<div class="arrangementer_front_block" style="width: 100%;"></div>
<div class="container-fluid">
  <div class="row well">

    <div>
      <?php print $user_picture; ?>
      <?php if (isset($content['field_zone'][0])) : ?>
        <div style="float:right;">
          <a class="kortknap" data-toggle="modal" data-target="#exampleModalCenter">
            Zonekort
          </a>
        </div>
      <?php endif; ?>
      <h2><?php print $title ?></h2>

      <?php if (!$page) : ?>
        <h2<?php print $title_attributes; ?>><a href="<?php print $node_url; ?>"><?php print $title; ?></a></h2>
        <?php endif; ?>

        <span class="btn btn-event">
          <?php print render($content['field_event_category']); ?>
        </span> <br>
        <!--<div class="col-lg-5 col-md-6 col-sm-6 col-xs-12 col-xs-height col-full-height"> -->
        <?php print render($content['field_title_image']); ?>
        <!-- </div> -->
        <br>
        <div class="info-field">
          <p>
            <i class="fa-solid fa fa-calendar fa-2x"></i> <?php print sizeof($content['field_hold_tider']) == 0 ? render($content['field_dato'][0]) : t('Flere tider'); ?>
          </p>
          <p>
            <i class="icon-margin fa fa-map-marker fa-2x"></i>
            <?php if (isset($oc_harrypotter_event_location) && $oc_harrypotter_event_location) : ?>
              <span id="map">
                <?php print $oc_harrypotter_event_location; ?>
              </span>
              <span id="map_data" style="display:none;">
                <?php print $oc_harrypotter_event_location_no_name; ?>
              </span>

            <?php else : ?>
              <?php print t('See event info'); ?>
            <?php endif; ?>
          </p>
          <?php if (isset($content['field_zone'][0])) : ?>
            <p>
              <i class="fa-solid fa fa-map-location-dot fa-2x"></i>
              <a class="kortknap" data-toggle="modal" data-target="#exampleModalCenter">
                <?php print render($content['field_zone'][0]['#title']); ?>
              </a>
            </p>
          <?php endif; ?>
          <!-- Modal -->
          <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-lg modal-dialog-centered" style="max-width:757px;" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h3 class="modal-title" id="exampleModalCenterTitle">Zonekort</h3>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                  <img src="/sites/magiskedageodense.dk/files/Oversigtskort-MDO1024_3.png" />
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-danger" data-dismiss="modal">Luk</button>
                </div>
              </div>
            </div>
          </div>
          <p>
            <?php if (isset($content['field_alder'][0])) : ?>
              <p>
                <i class="icon-margin fa fa-users fa-2x"></i> <?php print render($content['field_alder'][0]); ?>
              </p>
            <?php endif; ?>
            <?php if ($content['field_price']['#items'][0]['value'] != -10) : ?>
              <i class="icon-margin fa fa-shopping-cart fa-2x"></i>
              <?php if ($content['field_price']['#items'][0]['value'] == -1 || $content['field_price']['#items'][0]['value'] === "0") : ?>
                <?php print t('Free'); ?>
              <?php elseif (is_null($content['field_price']['#items'][0]['value'])) : ?>
                <?php print t('Free registration'); ?>
              <?php else : ?>
                <?php print render($content['field_price'][0]) . " kr."; ?>
              <?php endif; ?>
          </p>
        <?php endif; ?>
        <?php if (isset($content['field_obs'][0])) : ?>
          <p>
            <i class="fa-solid fa fa-circle-exclamation fa-2x"></i> <?php print render($content['field_obs'][0]); ?>
          </p>
        <?php endif; ?>
        <p><?php print render($content['field_attachments']); ?></p>
        <p><?php print render($content['field_info']); ?></p>

        <?php if (isset($oc_harrypotter_place2book_tickets) && $oc_harrypotter_place2book_tickets) : ?>
          <p><?php print isset($content['field_place2book_tickets']) ? render($content['field_place2book_tickets'][0]) : ""; ?><p>
            <?php endif; ?>
        </div>

        <div id="node-<?php print $node->nid; ?>" class="<?php print $classes; ?> clearfix" <?php print $attributes; ?>>

          <div class="lead">
            <br>
            <p>
              <span style="lead">
                <?php print render($content['field_lead'][0]); ?>
              </span>
            </p>
          </div>

          <div class="content" <?php print $content_attributes; ?>>
            <?php
            // We hide the comments and links now so that we can render them later.
            if (isset($content['field_place2book_tickets'])) {
              hide($content['field_place2book_tickets']); //<-- field provided by optional module ding_place2book
            }
            hide($content['field_category']);
            hide($content['field_lead']);
            hide($content['comments']);
            hide($content['links']);
            hide($content['field_zone']);
            hide($content['field_obs']);
            hide($content['field_title_image']);
            hide($content['field_attachments']);
            hide($content['field_tags']);
            hide($content['field_info']);
            hide($content['field_galleria']);
            hide($content['field_target']);
            hide($content['field_price']);
            hide($content['field_location']);
            hide($content['field_dato']);
            print render($content);
            ?>
          </div>
          <p><?php print render($content['field_galleria']); ?></p>
          <div class="page-footer">
            <?php if (!$teaser) : ?>
              <p><?php print render($content['field_tags']); ?></p>
              <?php if ($display_submitted) : ?>
                <div>
                  <?php print $user_picture; ?>
                  <div>
                    <h4>
                      <?php print $oc_harrypotter_byline; ?>
                      <?php print $name; ?>
                    </h4>
                    <p>
                      <i class="glyphicon glyphicon-time"></i>
                      <?php print $submitted; ?> • <?php print $oc_harrypotter_updated; ?>
                    </p>
                  </div>
                </div>
              <?php endif; ?>
            <?php endif; ?>

            <?php print render($content['links']); ?>
            <?php print render($content['comments']); ?>
          </div>
        </div>

    </div>

  </div>
</div>