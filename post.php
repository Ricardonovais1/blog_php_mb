<?php
  include_once("templates/header.php");

  if(isset($_GET)) {
    $post_id = $_GET['id'];
    $current_post;

    foreach($posts as $post) {
      if($post['id'] == $post_id) {
        $current_post = $post;
      }
    }
  }
?>
<main id="post-container">
  <div class="content-container">
    <h1 id="main-title"><?= $current_post['title']; ?></h1>
    <p id="post-description">
      <?= $current_post['description']; ?>
    </p>
    <div class="img-container">
      <img src="<?= $BASE_URL ?>img/<?= $current_post['img'] ?>" alt="<?= $current_post['title'] ?>">
    </div>
    <p class="post-content">
      Lorem ipsum, dolor sit amet consectetur adipisicing elit. Minima excepturi quae recusandae veritatis eligendi. Sint consequuntur commodi iusto tenetur quidem temporibus aliquam at deleniti? Explicabo provident fugiat vel consectetur repellat.
      Tenetur cupiditate maxime ipsa enim voluptates cumque quidem sed reprehenderit! At dolorem, ad cum velit porro a esse nobis ducimus nemo deleniti dicta possimus molestias libero maiores, amet quos iure.
      Odio nulla similique consequatur distinctio optio quasi accusamus iusto nostrum ullam earum, deserunt neque, hic cumque adipisci? Libero molestiae, vitae alias id, quia incidunt at laboriosam doloribus aspernatur magnam debitis.
      At minus dolorem nihil nam distinctio explicabo! Repellat, odio ipsa. Ipsam quos voluptas modi ullam voluptate facilis tempora non minus eos quo! Alias expedita cupiditate maxime esse? Itaque, alias dolorum!
      Ea molestiae, voluptatibus tempore sint dolores delectus optio. Totam nobis fugiat ex possimus eius, quis sapiente earum autem cupiditate, numquam corporis voluptates ad, consequuntur et vitae eos adipisci maxime sunt!
    </p>
    <p class="post-content">
      Lorem ipsum, dolor sit amet consectetur adipisicing elit. Minima excepturi quae recusandae veritatis eligendi. Sint consequuntur commodi iusto tenetur quidem temporibus aliquam at deleniti? Explicabo provident fugiat vel consectetur repellat.
      Tenetur cupiditate maxime ipsa enim voluptates cumque quidem sed reprehenderit! At dolorem, ad cum velit porro a esse nobis ducimus nemo deleniti dicta possimus molestias libero maiores, amet quos iure.
      Odio nulla similique consequatur distinctio optio quasi accusamus iusto nostrum ullam earum, deserunt neque, hic cumque adipisci? Libero molestiae, vitae alias id, quia incidunt at laboriosam doloribus aspernatur magnam debitis.
      At minus dolorem nihil nam distinctio explicabo! Repellat, odio ipsa. Ipsam quos voluptas modi ullam voluptate facilis tempora non minus eos quo! Alias expedita cupiditate maxime esse? Itaque, alias dolorum!
      Ea molestiae, voluptatibus tempore sint dolores delectus optio. Totam nobis fugiat ex possimus eius, quis sapiente earum autem cupiditate, numquam corporis voluptates ad, consequuntur et vitae eos adipisci maxime sunt!
    </p>

  </div>
  <aside id="nav-container">
  <h3 id="tags-title">Tags</h3>
  <ul id="tag-list">
    <?php foreach($current_post['tags'] as $tag): ?>
      <li><a href="#"><?= $tag ?></a></li>
    <?php endforeach; ?>
  </ul>
  <h3 id="categories-title">Categories</h3>
  <ul id="categories-list">
    <?php foreach($categories as $category): ?>
      <li><a href="#"><?= $category ?></a></li>
    <?php endforeach; ?>
  </ul>
</aside>

</main>




<?php
  include_once("templates/footer.php");
?>
