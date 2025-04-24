
<div class="elevator-design">
                    <div class="elevator-door left-door"></div>
                    <div class="elevator-door right-door"></div>
                    <div class="elevator-panel">
                        <div class="floor-indicator">1</div>
                        <div class="button-panel">
                            <button class="floor-button">1</button>
                            <button class="floor-button">2</button>
                            <button class="floor-button">3</button>
                            <button class="floor-button">4</button>
                        </div>
                    </div>
                </div>

                <style>
                    .elevator-design {
                        position: relative;
                        width: 300px;
                        height: 500px;
                        margin: 0 auto;
                        background: #333;
                        border: 2px solid #555;
                        border-radius: 10px;
                        overflow: hidden;
                    }

                    .elevator-door {
                        position: absolute;
                        width: 50%;
                        height: 100%;
                        background: #777;
                        transition: transform 1s ease-in-out;
                    }

                    .left-door {
                        left: 0;
                        transform: translateX(0);
                    }

                    .right-door {
                        right: 0;
                        transform: translateX(0);
                    }

                    .elevator-design:hover .left-door {
                        transform: translateX(-100%);
                    }

                    .elevator-design:hover .right-door {
                        transform: translateX(100%);
                    }

                    .elevator-panel {
                        position: absolute;
                        top: 10px;
                        left: 10px;
                        right: 10px;
                        bottom: 10px;
                        background: #222;
                        border-radius: 5px;
                        display: flex;
                        flex-direction: column;
                        align-items: center;
                        justify-content: space-between;
                        padding: 20px;
                    }

                    .floor-indicator {
                        font-size: 2rem;
                        color: #fff;
                        margin-bottom: 20px;
                    }

                    .button-panel {
                        display: flex;
                        flex-wrap: wrap;
                        gap: 10px;
                    }

                    .floor-button {
                        width: 50px;
                        height: 50px;
                        background: #444;
                        color: #fff;
                        border: none;
                        border-radius: 5px;
                        font-size: 1rem;
                        cursor: pointer;
                        transition: background 0.3s;
                    }

                    .floor-button:hover {
                        background: #f34f1a;
                    }
                </style>

                <script>
                    const elevatorDoors = document.querySelectorAll('.elevator-door');
                    const floorButtons = document.querySelectorAll('.floor-button');
                    const floorIndicator = document.querySelector('.floor-indicator');

                    floorButtons.forEach((button, index) => {
                        button.addEventListener('click', () => {
                            elevatorDoors.forEach(door => {
                                door.style.transform = 'translateX(0)';
                            });
                            floorIndicator.textContent = index + 1;
                        });
                    });

                    elevatorDoors.forEach(door => {
                        door.addEventListener('transitionend', () => {
                            door.style.transform = 'translateX(0)';
                        });
                    });
                </script>