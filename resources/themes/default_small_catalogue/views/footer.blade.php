<?php
/**
 * TEMPLATE: DEFAULT
 *
 * @author     DropCart <info@dropcart.nl>
 * @copyright  2017  DropCart
 * @license    https://creativecommons.org/licenses/by-nc-nd/3.0/legalcode.txt  CreativeCommons by-nc-nd-3.0
 */
?>

<footer class="footer">
    <div class="row">
        <div class="col-sm-8">
            <p>{{ lang('footer_text') }}</p>
        </div>
        <div class="col-sm-2">
            <div class="box activiteiten">
                <h4>Volg ons via</h4>
                <ul>
                    <li><a href="http://www.twitter.com/HygreenEU" target="_blank"><img src="{{ env('BASE_URL', '/') . 'img/activiteiten_twitter.png' }}"> Twitter</a></li>
                    <li><a href="http://www.facebook.com/HygreenEU"  target="_blank"><img src="{{ env('BASE_URL', '/') . 'img/facebook.png' }}"> Facebook</a></li>
                    <li><a href="http://www.linkedin.com/company/hygreen" target="_blank"><img src="{{ env('BASE_URL', '/') . 'img/activiteiten_linkedin.png' }}"> LinkedIn</a></li>
                </ul>
            </div>
        </div>
        <div class="col-sm-2 text-right">
            <h4>Contact met ons</h4>
            <p><a href="#"><span class="glyphicon glyphicon-earphone" aria-hidden="true" style="font-size: 20pt; margin-right: 10px;"></span></a>
                <a href="#"><span class="glyphicon glyphicon-envelope" aria-hidden="true" style="font-size: 20pt;"></span></a></p>
        </div>
    </div>
</footer>

<!-- container -->
</div>

@include('DefaultSmallCatalogue::dynamic.post-js')

@stack('post-js')
</body>
</html>