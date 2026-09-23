<?php
defined('_VALID_AI') or die('Direct Access to this location is not allowed.');

aiPostboxOpen("id-help-ai", "Advanced iFrame AI Assistant", $closedArray, "100%", " show-always");
echo '<p>';
_e('Not sure how to set up Advanced iFrame for your use case? The Advanced iFrame AI Assistant page provides ready-to-use prompts for common scenarios — just copy, paste into Claude or ChatGPT (with web access enabled) and get step-by-step guidance.', 'advanced-iframe');
echo '</p>';
?>
  <p>
    <a href="//www.advanced-iframe.com/advanced-iframe-ai-assistant" target="_blank" id="ai-assistant"
       class="button-primary"><?php _e('Go to Advanced iFrame AI Assistant', 'advanced-iframe'); ?></a>
  </p>
<?php
aiPostboxClose();
?>
