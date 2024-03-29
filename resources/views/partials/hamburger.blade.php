<div class="sm:hidden fixed top-0 right-0 mt-4 mr-4 z-20">
    <svg width="50" height="50" viewBox="0 0 100 100" id="hamburger" style="border: 1px solid black"
        @click="open = !open" :class="{'open' : open }" class="bg-white">
        <style>
            .line {
                fill: none;
                stroke: black;
                stroke-width: 4;
                transition: stroke-dasharray 600ms cubic-bezier(0.4, 0, 0.2, 1),
                    stroke-dashoffset 600ms cubic-bezier(0.4, 0, 0.2, 1)
            }

            .line1 {
                stroke-dasharray: 60, 134;
            }

            .line2 {
                stroke-dasharray: 60, 60;
            }

            .line3 {
                stroke-dasharray: 60, 133;
            }

            .open .line1 {
                stroke-dasharray: 100, 134;
                stroke-dashoffset: -110;
            }

            .open .line2 {
                stroke-dasharray: 60, 60;
                stroke-dashoffset: 60;
            }

            .open .line3 {
                stroke-dasharray: 100, 134;
                stroke-dashoffset: -110;
            }
        </style>
        <path class="line line1" d="M 20,29 H 80 V 78 L20,19" />
        <path class="line line2" d="M 20,50 H 80" />
        <path class="line line3" d="M 20,70 H 80 V 20 L20,77" />
    </svg>
</div>
