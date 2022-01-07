@extends('layouts.app')

@section('content')
    <div class="container mx-auto px-4">
        <h2 class="text-blue-500 uppercase tracking-wide font-semibold">Popular Games</h2>
        <div class="popular-games text-sm grid grid-cols-6 gap-12 border-b border-gray-800 pb-16">
            <div class="game mt-8">
                <div class="relative inline-block">
                    <a href="#">
                    <img src="/img/doom.jpeg" alt="game cover" class="   hover:opacity-75 transition ease-in-out duration-150">
                    </a>
                    <div class="absolute bottom-0 right-0 w-16 h-16 bg-gray-800 rounded-full"style="right:-20px;
                           bottom:-20px">
                       <div class="font-semibold text-xs flex justify-center items-center h-full" >80%</div>
                    </div>
                </div>
                <a href="#" class="block text-base font-semibold leading-tight hover:text-gray-400 mt-8" >Doom Ertelnal </a>
                <div class="text-gray-400 mt-1">Playstation 4</div>
            </div>
            <div class="game mt-8">
                <div class="relative inline-block">
                    <a href="#">
                        <img src="/img/cyberpunk.jpg" alt="game cover" class=" hover:opacity-75 transition ease-in-out duration-150">
                    </a>
                    <div class="absolute bottom-0 right-0 w-16 h-16 bg-gray-800 rounded-full"style="right:-20px;
                           bottom:-20px">
                        <div class="font-semibold text-xs flex justify-center items-center h-full" >80%</div>
                    </div>
                </div>
                <a href="#" class="block text-base font-semibold leading-tight hover:text-gray-400 mt-8" >CyberPunk </a>
                <div class="text-gray-400 mt-1">PC</div>
            </div>
            <div class="game mt-8">
                <div class="relative inline-block">
                    <a href="#">
                        <img src="/img/farcray6.jpg" alt="game cover" class="hover:opacity-75 transition ease-in-out duration-150">
                    </a>
                    <div class="absolute bottom-0 right-0 w-16 h-16 bg-gray-800 rounded-full"style="right:-20px;
                           bottom:-20px">
                        <div class="font-semibold text-xs flex justify-center items-center h-full" >80%</div>
                    </div>
                </div>
                <a href="#" class="block text-base font-semibold leading-tight hover:text-gray-400 mt-8" >Far Cry 6 </a>
                <div class="text-gray-400 mt-1">Playstation 6</div>
            </div>
            <div class="game mt-8">
                <div class="relative inline-block">
                    <a href="#">
                        <img src="/img/gta6.jpeg" alt="game cover" class="hover:opacity-75 transition ease-in-out duration-150">
                    </a>
                    <div class="absolute bottom-0 right-0 w-16 h-16 bg-gray-800 rounded-full"style="right:-20px;
                           bottom:-20px">
                        <div class="font-semibold text-xs flex justify-center items-center h-full" >80%</div>
                    </div>
                </div>
                <a href="#" class="block text-base font-semibold leading-tight hover:text-gray-400 mt-8" >GTA 6 </a>
                <div class="text-gray-400 mt-1">Playstation 4</div>
            </div>
            <div class="game mt-8">
                <div class="relative inline-block">
                    <a href="#">
                        <img src="/img/minecraftrtx.jpg" alt="game cover" class="hover:opacity-75 transition ease-in-out duration-150">
                    </a>
                    <div class="absolute bottom-0 right-0 w-16 h-16 bg-gray-800 rounded-full"style="right:-20px;
                           bottom:-20px">
                        <div class="font-semibold text-xs flex justify-center items-center h-full" >80%</div>
                    </div>
                </div>
                <a href="#" class="block text-base font-semibold leading-tight hover:text-gray-400 mt-8" >MineCraft RTX </a>
                <div class="text-gray-400 mt-1">Pc</div>
            </div>
            <div class="game mt-8">
                <div class="relative inline-block">
                    <a href="#">
                        <img src="/img/ageofempires.jpg" alt="game cover" class="hover:opacity-75 transition ease-in-out duration-150">
                    </a>
                    <div class="absolute bottom-0 right-0 w-16 h-16 bg-gray-800 rounded-full"style="right:-20px;
                           bottom:-20px">
                        <div class="font-semibold text-xs flex justify-center items-center h-full" >80%</div>
                    </div>
                </div>
                <a href="#" class="block text-base font-semibold leading-tight hover:text-gray-400 mt-8" >Age of Empires IV </a>
                <div class="text-gray-400 mt-1">Playstation 4</div>
            </div>
            <div class="game mt-8">
                <div class="relative inline-block">
                    <a href="#">
                        <img src="/img/Wow.jpeg" alt="game cover" class="hover:opacity-75 transition ease-in-out duration-150">
                    </a>
                    <div class="absolute bottom-0 right-0 w-16 h-16 bg-gray-800 rounded-full"style="right:-20px;
                           bottom:-20px">
                        <div class="font-semibold text-xs flex justify-center items-center h-full" >80%</div>
                    </div>
                </div>
                <a href="#" class="block text-base font-semibold leading-tight hover:text-gray-400 mt-8" >World of WarCraft </a>
                <div class="text-gray-400 mt-1">Pc</div>
            </div>
            <div class="game mt-8">
                <div class="relative inline-block">
                    <a href="#">
                        <img src="/img/battlefield1.jpg" alt="game cover" class="hover:opacity-75 transition ease-in-out duration-150">
                    </a>
                    <div class="absolute bottom-0 right-0 w-16 h-16 bg-gray-800 rounded-full"style="right:-20px;
                           bottom:-20px">
                        <div class="font-semibold text-xs flex justify-center items-center h-full" >80%</div>
                    </div>
                </div>
                <a href="#" class="block text-base font-semibold leading-tight hover:text-gray-400 mt-8" >BattleField 1 </a>
                <div class="text-gray-400 mt-1">Pc</div>
            </div>
        </div> <!--end of popular games -->
        <div class="flex my-10">
            <div class="recently-reviewed w-3/4 mr-32">
               <h2 class="text-blue-500 uppercase tracking-wide font-semibold">Recently Reviewed</h2>
                <div class="recently-reviewed-container space-y-12 mt-8">
                    <div class="game bg-gray-800 rounded-lg shadow-md flex px-6 py-6">
                        <div class="relative flex-none">
                            <a href="#">
                                <img src="/img/doom.jpeg" alt="game cover" class="w-48 hover:opacity-75 transition ease-in-out duration-150">
                            </a>
                            <div class="absolute bottom-0 right-0 w-16 h-16 bg-gray-900 rounded-full" style="right: -20px; bottom: -20px">
                                <div class="font-semibold text-xs flex justify-center items-center h-full">
                                    80%
                                </div>
                            </div>
                        </div>
                        <div class="ml-6 lg:ml-12">
                            <a href="#" class="block text-lg font-semibold leading-tight hover:text-gray-400 mt-4">Doom Erternal</a>
                            <div class="text-gray-400 mt-1">Pc</div>
                            <p class="mt-6 text-gray-400 hidden lg:block">
                                Hell’s armies have invaded Earth. Become the Slayer in an epic single-player campaign to conquer demons across dimensions and stop the final destruction of humanity.
                                The Only Thing they Fear... Is You.
                                Experience the ultimate combination of speed and power in DOOM Eternal - the next leap in push-forward, first-person combat.
                                Slayer Threat Level At Maximum

                            </p>
                        </div>
                    </div> <!-- end game -->

                    <div class="game bg-gray-800 rounded-lg shadow-md flex px-6 py-6">
                        <div class="relative flex-none">
                            <a href="#">
                                <img src="/img/battlefield1.jpg" alt="game cover" class="w-48 hover:opacity-75 transition ease-in-out duration-150">
                            </a>
                            <div class="absolute bottom-0 right-0 w-16 h-16 bg-gray-900 rounded-full" style="right: -20px; bottom: -20px">
                                <div class="font-semibold text-xs flex justify-center items-center h-full">
                                    80%
                                </div>
                            </div>
                        </div>
                        <div class="ml-6 lg:ml-12">
                            <a href="#" class="block text-lg font-semibold leading-tight hover:text-gray-400 mt-4">Battle Field 1</a>
                            <div class="text-gray-400 mt-1">Pc</div>
                            <p class="mt-6 text-gray-400 hidden lg:block">
                                Battlefield 1 Revolution is the complete package containing:
                                Battlefield 1 base game — Experience the dawn of all-out war in Battlefield 1.
                                Discover a world at war through an adventure-filled campaign, or join in epic
                                team-based multiplayer battles with up to 64 players. Fight as infantry or take control
                                of amazing vehicles on land, air, and sea.

                            </p>
                        </div>
                    </div> <!-- end game -->

                    <div class="game bg-gray-800 rounded-lg shadow-md flex px-6 py-6">
                        <div class="relative flex-none">
                            <a href="#">
                                <img src="/img/farcray6.jpg" alt="game cover" class="w-48 hover:opacity-75 transition ease-in-out duration-150">
                            </a>
                            <div class="absolute bottom-0 right-0 w-16 h-16 bg-gray-900 rounded-full" style="right: -20px; bottom: -20px">
                                <div class="font-semibold text-xs flex justify-center items-center h-full">
                                    80%
                                </div>
                            </div>
                        </div>
                        <div class="ml-6 lg:ml-12">
                            <a href="#" class="block text-lg font-semibold leading-tight hover:text-gray-400 mt-4">Far Cry 6</a>
                            <div class="text-gray-400 mt-1">Pc</div>
                            <p class="mt-6 text-gray-400 hidden lg:block">
                                Far Cry comes to America in the latest installment of the award-winning franchise.
                                Welcome to Hope County, Montana, land of the free and the brave but also home to a
                                fanatical doomsday cult known as Eden’s Gate. Stand up to cult leader Joseph Seed,
                                and his siblings, the Heralds, to spark the fires of resistance and liberate the
                                besieged community.
                            </p>
                        </div>
                    </div> <!-- end game -->

                </div>
            </div>
            <div class="most-anticipated w-1/4">
                <h2 class="text-blue-500 uppercase tracking-wide font-semibold">Most Anticipated</h2>
                <div class="most-anticipated-container space-y-10 mt-8">
                    <div class="game flex">
                        <a href="#">
                            <img src="/img/farcray6.jpg" alt="game cover" class="w-16 hover:opacity-75 transition ease-in-out duration-150">
                        </a>
                        <div class="ml-4">
                            <a href="#" class="hover:text-gray-300">Far Cry 6</a>
                            <div class="text-gray-400 text-sm mt-1">Sept 16, 2020</div>
                        </div>

                    </div>
                </div>
                <div class="most-anticipated-container space-y-10 mt-8">
                    <div class="game flex">
                        <a href="#">
                            <img src="/img/doom.jpeg" alt="game cover" class="w-16 hover:opacity-75 transition ease-in-out duration-150">
                        </a>
                        <div class="ml-4">
                            <a href="#" class="hover:text-gray-300">Doom Ertelnal</a>
                            <div class="text-gray-400 text-sm mt-1">Sept 16, 2020</div>
                        </div>

                    </div>
                </div>
                <div class="most-anticipated-container space-y-10 mt-8">
                    <div class="game flex">
                        <a href="#">
                            <img src="/img/Wow.jpeg" alt="game cover" class="w-16 hover:opacity-75 transition ease-in-out duration-150">
                        </a>
                        <div class="ml-4">
                            <a href="#" class="hover:text-gray-300">World of Warcraft</a>
                            <div class="text-gray-400 text-sm mt-1">Sept 16, 2020</div>
                        </div>

                    </div>
                </div>

                <h2 class="text-blue-500 uppercase tracking-wide font-semibold mt-12">COMING SOON</h2>
                <div class="most-anticipated-container space-y-10 mt-8">
                    <div class="game flex">
                        <a href="#">
                            <img src="/img/farcray6.jpg" alt="game cover" class="w-16 hover:opacity-75 transition ease-in-out duration-150">
                        </a>
                        <div class="ml-4">
                            <a href="#" class="hover:text-gray-300">Far Cry 6</a>
                            <div class="text-gray-400 text-sm mt-1">Sept 16, 2020</div>
                        </div>

                    </div>
                </div>
                <div class="most-anticipated-container space-y-10 mt-8">
                    <div class="game flex">
                        <a href="#">
                            <img src="/img/doom.jpeg" alt="game cover" class="w-16 hover:opacity-75 transition ease-in-out duration-150">
                        </a>
                        <div class="ml-4">
                            <a href="#" class="hover:text-gray-300">Doom Ertelnal</a>
                            <div class="text-gray-400 text-sm mt-1">Sept 16, 2020</div>
                        </div>

                    </div>
                </div>
                <div class="most-anticipated-container space-y-10 mt-8">
                    <div class="game flex">
                        <a href="#">
                            <img src="/img/Wow.jpeg" alt="game cover" class="w-16 hover:opacity-75 transition ease-in-out duration-150">
                        </a>
                        <div class="ml-4">
                            <a href="#" class="hover:text-gray-300">World of Warcraft</a>
                            <div class="text-gray-400 text-sm mt-1">Sept 16, 2020</div>
                        </div>

                    </div>
                </div>
            </div>

        </div>

    </div> <!-- end container -->

    @endsection
