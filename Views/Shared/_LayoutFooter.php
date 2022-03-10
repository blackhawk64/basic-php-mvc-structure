<!-- Footer -->
<footer class="text-center">
    <a class="up-arrow" href="#myPage" data-toggle="tooltip" title="TO TOP">
        <span class="glyphicon glyphicon-chevron-up"></span>
    </a><br><br>
    <p>Bootstrap Theme Made By <a href="https://www.w3schools.com" data-toggle="tooltip" title="Visit w3schools">www.w3schools.com</a></p>
</footer>

<script src="<?php echo constant('BASE_URL'); ?>wwwroot/js/app.js"></script>
<!--JS Injection-->
<?php if (count($this->JsDependencies) > 0) : ?>
    <?php foreach ($this->JsDependencies as $js) : ?>
        <?php echo $js . "\n"; ?>
    <?php endforeach ?>
<?php endif ?>
<!--JS Injection-->
</body>

</html>