<?php
require_once('views/partials/head.php');
require_once('views/partials/nav.php');
?>
<div id="seat-information" class="text-white w-full mt-[50px] ">
    <div class="movie-container width-full text-white flex p-5">
        <div class="container flex flex-col gap-2.5 width-full  p-4 rounded-l-[80px]">
            <h1 class="text-[28px] text-center font-bold">SELECT YOUR SEAT</h1>
            <div class="w-full">
                <div class="letter-container flex flex-col items-center bg-gray-700 bg-opacity-[75%] p-2.5 rounded-[30px]" style="perspective: 1000px;">

                    <?php
                    $alphabets = ['A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I', 'J', 'K', 'M'];
                    foreach ($alphabets as $alphabet) { ?>
                        <div class='flex w-full justify-evenly '>
                            <p class='letter-row w-[20px] mt-[10px] flex'>
                                <?= $alphabet ?>
                            </p>
                            <div class='row flex-1' id="seat-movie">
                                <?php
                                for ($i = 1; $i <= 12; $i++) {
                                    $seatName = $alphabet . $i;
                                    $isFound = true;
                                    foreach ($seat as $rowName) {
                                        if ($seatName == $rowName['name']) {
                                            $isFound = false;
                                        }
                                    }
                                    if (!$isFound) {
                                        echo "<img src='views/images/components_image/seat_un.png' alt='' id='chair' class='unseat w-[30px] h-[30px] m-[3px]'>";
                                    } else {
                                        echo "<img data-index='" . $alphabet . $i . "' src='views/images/components_image/seat.png' alt='' id='chair' class='seat w-[30px] h-[30px] m-[3px]'>";
                                    }
                                };
                                ?>
                            </div>
                        </div>
                    <?php
                    }
                    ?>
                    <div class="screen bg-white h-[30px] flex self-center w-[80%] mt-[20px]"></div>
                </div>
            </div>
        </div>
        <div class="info-movie p-4 flex flex-col items-center gap-2.5 w-full rounded-r-[80px]">
            <h1 class="text-[28px] font-bold">SUMMARY</h1>
            <div class="movie bg-gray-700 bg-opacity-[75%] w-full flex flex-col gap-5 p-2.5 rounded-[30px]">
                <div class="movie-summary flex gap-5 rounded-[30px]">
                    <div class="movie-image w-[80px] flex-1 rounded-[30px]">
                        <img src="<?= (file_exists("views/images/shows_image/" . $movieShow['image']) ? "views/images/shows_image/" . $movieShow['image'] : "None") ?>" alt="" class="w-full rounded-[30px]">
                    </div>
                    <div class="movie-title flex flex-col flex-1 gap-2.5">
                        <h3 class=" text-[26px] font-bold">
                            <?= (!empty($movieShow && !empty($movieShow['name'])) ? htmlspecialchars($movieShow['name']) : 'None') ?>
                        </h3>
                        <h3 class="text-[20px] font-bold text-gray-400">Duration:
                            <span class="text-white">
                                <?= (!empty($movieShow && !empty($movieShow['duration'])) ? htmlspecialchars($movieShow['duration']) : 'None') ?>
                            </span>
                        </h3>
                        <h3 class="text-[20px] font-bold text-gray-400">Language:
                            <span class="text-white">
                                <?= (!empty($movieShow && !empty($movieShow['language'])) ? htmlspecialchars($movieShow['language']) : 'None') ?>
                            </span>
                        </h3>
                        <!-- ------------detaill -->
                        <h3 class="text-[20px] font-bold text-gray-400">location:
                            <span class="text-white">
                                <?= $venueName['name'] ?>
                            </span>
                        </h3>
                        <h3 class="text-[20px] font-bold text-gray-400">Hall:
                            <span class="text-white">
                                <?= (!empty($detail && !empty($detail['hall'])) ? htmlspecialchars($detail['hall']) : 'None') ?>
                            </span>
                        </h3>
                        <h3 class="text-[20px] font-bold text-gray-400">Date:
                            <span class="text-white">
                                <?= (!empty($detail && !empty($detail['date'])) ? htmlspecialchars($detail['date']) : 'None') ?>
                            </span>
                        </h3>
                        <h3 class="text-[20px] font-bold text-gray-400">Time:
                            <span class="text-white">
                                <?php
                                $time = $detail['time'];
                                $formatTime = date('h:i A', strtotime($time));
                                echo $formatTime;
                                ?>
                            </span>
                        </h3>
                        <h3 class="text-[20px] font-bold text-gray-400">Price:
                            <span class="text-white" id="show-price"><?= (!empty($detail && !empty($detail['price'])) ? htmlspecialchars($detail['price']) : 'None') ?></span>
                        </h3>
                        <h3 class="text-[20px] font-bold text-gray-400">Seat:
                            <span class="text-white" id="total-seat"></span>
                        </h3>
                        <h3 class="text-[20px] font-bold text-gray-400">Totail price:
                            <span class="text-white" id="totail-price"></span>
                        </h3>
                    </div>
                </div>
                <div class="checkout-btn flex justify-between mt-4 mb-3">
                    <a href="/booking?id=<?= $_GET['id'] ?>" class="w-[15%]"><button class="bg-[#ff0000] w-full  p-[10px] rounded-[20px] hover:bg-white hover:text-black">Cancel</button></a>
                    <button class="bg-[#ff0000] w-[15%] p-[10px] rounded-[20px] hover:bg-white hover:text-black" type="button" id="checkout">Checkout</button>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- ------------------payment------------ -->

<div id="payment-container" class="fixed top-0 left-0 right-0 z-50 bg-[#1f1e1ec3] hidden p-4 scrollbar-hide md:inset-0 h-modal md:h-full px-5 pb-5 pt-10">
    <form id="payment-form" action="" method="post" class="w-full mx-auto rounded-lg bg-white shadow-lg p-5 text-gray-700 mt-2" style="max-width: 600px">
        <div class="w-full pt-1 pb-5">
            <div class="bg-black text-white overflow-hidden rounded-full w-20 h-20 -mt-16 mx-auto shadow-lg flex justify-center items-center">
                <img src="views/images/components_image/tickhub.png" class="mdi mdi-credit-card-outline text-3xl rounded-full" />
            </div>
        </div>
        <div class="mb-5">
            <h1 class="text-center font-bold text-xl uppercase">TICKHUB payment </h1>
        </div>
        <div class="mb-5 flex -mx-2 justify-center">
            <div class="px-2">
                <label for="type1" class="flex items-center cursor-pointer">
                    <img src="https://leadershipmemphis.org/wp-content/uploads/2020/08/780370.png" class="h-8">
                </label>
            </div>
            <div class="">
                <label for="type2" class="flex items-center cursor-pointer">
                    <img src="https://www.sketchappsources.com/resources/source-image/PayPalCard.png" class="h-8">
                </label>
            </div>
        </div>
        <div class="mb-3 -mx-2 flex items-end">
            <div class="px-2 w-1/2">
                <label class="font-bold text-sm mb-2 ml-1">Card Name</label>
                <div>
                    <input name="card-name" id="card-name" type="text" class="w-full px-3 py-2 mb-1 border-2 border-gray-200 rounded-md focus:outline-none focus:border-indigo-500 transition-colors cursor-pointer" placeholder="John Smith" />
                </div>
            </div>
            <div class="px-2 w-1/2">
                <label class="font-bold text-sm mb-2 ml-1">Choose card</label>
                <div>
                    <select name="card-type" id='type-card' class="form-select w-full px-3 py-2 mb-1 border-2 border-gray-200 rounded-md focus:outline-none focus:border-indigo-500 transition-colors cursor-pointer">
                        <option value="1" selected>Master Card</option>
                        <option value="2">Visa Card</option>
                        <option value="3">American Express Card</option>
                    </select>
                </div>
            </div>
        </div>
        <div class="mb-3 -mx-2 flex items-center">
            <div class="px-2 w-[80%]">
                <label class="font-bold text-sm mb-2 ml-1">Card Number</label>
                <div>
                    <input name="card-number" id="card-number" type="number" class="w-full px-3 py-2 mb-1 border-2 border-gray-200 rounded-md focus:outline-none focus:border-indigo-500 transition-colors" placeholder="5555555555554444" />
                </div>
            </div>
            <div class="w-[20%] flex justify-end item-end">
                <img id="card-icon" src="views/images/components_image/credit-card.png" class="w-full" alt="">
            </div>
        </div>
        <div class="mb-5 -mx-2 flex items-end">
            <div class="px-2 w-1/2">
                <label class="font-bold text-sm mb-2 ml-1">Expiration date</label>
                <div>
                    <input name="card-date" id="card-date" type="month" class="w-full px-3 py-2 mb-1 border-2 border-gray-200 rounded-md focus:outline-none focus:border-indigo-500 transition-colors cursor-pointer" />
                </div>
            </div>
            <div class="px-2 w-1/2">
                <label class="font-bold text-sm mb-2 ml-1">CVV</label>
                <div>
                    <input name="card-cvv" id="card-cvv" type="number" class="w-full px-3 py-2 mb-1 border-2 border-gray-200 rounded-md focus:outline-none focus:border-indigo-500 transition-colors cursor-pointer" placeholder="000" required maxlength="3" />
                </div>
            </div>
        </div>
        <div>
            <button id="payment-submit" class="block w-full max-w-xs mx-auto bg-indigo-500 hover:bg-indigo-700 focus:bg-indigo-700 text-white rounded-lg px-3 py-3 font-semibold"><i class="mdi mdi-lock-outline mt-5 mr-1"></i> PAY NOW</button>
        </div>
    </form>
</div>
<script src="views/js/seat.js"></script>
<?php
require_once('views/partials/footer.php');
?>