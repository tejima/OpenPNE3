<h2><?php echo __('スキンテーマ設定') ?></h2>

<?php if ($isExistsErrorTheme): ?>
  <h3><?php echo __('テーマのエラー情報') ?></h3>

  <?php if (!$unRegisterUseTheme && !$existsUseTheme): ?>
    <p><?php echo '使用しているテーマの'.$useTheme.'が公開ディレクトリにありません' ?></p>
    <?php if (isset($notInfoThemeList)): //行詰めで表示されてしまうので改行する?>
      <br />
    <?php endif; ?>
  <?php endif; ?>

  <?php if (isset($notInfoThemeList)): ?>
    <p><?php echo __('以下のテーマの情報が設定されていません') ?><br />
    <?php foreach ($notInfoThemeList as $theme): ?>
      <?php echo __($theme.'テーマ') ?> <br />
    <?php endforeach; ?>
    </p>
  <?php endif; ?>

<br />
<?php endif; ?>

<p><?php echo __('スキンプテーマはどれか一つのみが「有効」になっている必要があります。') ?></p>
<?php echo $form->renderFormTag(url_for('opSkinThemePlugin/index')); ?>
<table>
<?php include_partial('themeSelectRows', array('form' => $form)); ?>
<tr>
<td colspan="7">
<?php echo $form->renderHiddenFields() ?>
<input type="submit" value="<?php echo __('設定変更') ?>" />
</td>
</tr>
</table>
</form>

<h2><?php echo __('テーマの追加方法') ?></h2>

<p><?php echo __('テーマを追加するには、plugins/opSkinThemePluginのwebディレクトリの下に作成してください。') ?></p>
<p><?php echo __('テーマを追加したら、./symfony publish-assets を実行して、テーマディレクトリを公開ディレクトリにコピーしてください。') ?></p>
<p><?php echo __('テーマプラグインの詳しい説明はREADMEを参照ください。') ?></p>
