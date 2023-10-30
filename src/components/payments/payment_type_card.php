
<?php function paymentTypeCard($name, $link, $imgsrc, $alt) { ?>
    <a href="<?php echo $link; ?>">
        <div class="flex items-center h-28 hover:cursor-pointer border-b-[1px] border-gray-200">
            <div class=" w-[100px]">
                <img
                    src="<?php echo $imgsrc; ?>"
                    width="70px"
                    alt="<?php echo $alt; ?>"
                />
            </div>
            <div class="grow">
                <p class="font-medium text-lg"><?php echo $name; ?></p>
                <p>Make instant payements.</p>
            </div>
            <div>
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5" />
                </svg>
            </div>
        </div>
    </a>
<?php } ?>


<?php function paymentTypeCard2() { ?>
    <a href="/pages/card-payment.php">
        <div class="flex items-center h-28 hover:cursor-pointer border-b-[1px] border-gray-200">
            <div class=" w-[100px]">
                <img
                    id="image"
                    src=""
                    width="70px"
                    alt="card payment logos"
                />
                
            </div>
            <div class="grow">
                <p class="font-medium text-lg">Debit and Credit Cards</p>
                <p>Make instant payements.</p>
            </div>
            <div>
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5" />
                </svg>
            </div>
        </div>
    </a>
    <script>
        
        document.addEventListener('DOMContentLoaded', function() {
            var imgElement = document.getElementById('image');

            let count = 1;

            const intervalId = setInterval(() => {

                if (count === 1) {
                    imgElement.src="/public/assets/Mastercard-logo.png"
                    count++;
                }
                else if (count === 2) {
                    imgElement.src="/public/assets/american_express.png"
                    count++;
                }
                else if (count === 3) {
                    imgElement.src="/public/assets/visa-card-logo.png"
                    count++;
                }
                else{
                    count = 1
                }
                
                
            }, 1000);
        });
    </script>
<?php } ?>