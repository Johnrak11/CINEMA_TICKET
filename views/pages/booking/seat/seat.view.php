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
                    <a href="/booking?id=<?= $_GET['id'] ?>" class="w-[15%]" ><button class="bg-[#ff0000] w-full  p-[10px] rounded-[20px] hover:bg-white hover:text-black">Cancel</button></a>
                    <button class="bg-[#ff0000] w-[15%] p-[10px] rounded-[20px] hover:bg-white hover:text-black" type="button">Checkout</button>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="views/js/seat.js"></script>
<?php
require_once('views/partials/footer.php');
?>