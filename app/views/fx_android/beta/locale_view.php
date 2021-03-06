<h1>Firefox for Android Beta (<?= $request['locale'] ?>)</h1>

<h3>Title &mdash; <?= $title_warning ?></h3>
<pre <?= $direction ?>><?= $app_title($translations) ?></pre>

<h3>What’s new &mdash; <?= $whatsnew_warning ?></h3>
<pre <?= $direction ?>><?= $whatsnew($translations) ?></pre>

<h3>Short Description &mdash; <?= $short_desc_warning ?></h3>
<pre <?= $direction ?> contenteditable="true"><em><?= $short_desc($translations) ?></em></pre>

<h3>Description &mdash; <?= $listing_warning ?></h3>
<pre <?= $direction ?>><?= $description($translations) ?></pre>
