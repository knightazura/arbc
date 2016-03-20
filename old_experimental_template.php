<div class="expanded row section" id="section-1" data-stellar-background-ratio="0.5">
            <div class="sky dark-1"></div>
        
            <div class="large-12 columns" id="stellar-1" data-stellar-ratio="0.7">
              <h1>Asean Reusable Bag Campaign <i class="fi-lightbulb"></i></h1>
            </div>

            <div class="plastic white1">
                <div class="plastic-1" data-stellar-ratio="7"></div>
            </div>
            <div class="plastic white2">
                <div class="plastic-2" data-stellar-ratio="3"></div>
            </div>

            <div class="large-1 medium-1 small-12 columns" id="take-down">
              <span data-menuanchor="secondPage"></span><a href="#secondPage">Begin from yourself!</a>
            </div>
        </div>

        <div class="expanded row section" id="section-2" data-stellar-offset-parent="true">
            <div class="plastic overlapstic">
                <div class="plastic-3" data-stellar-ratio="0.5"></div>
            </div>

            <div class="large-12 columns" id="slide-1">
                <h1>This is for slide</h1>
            </div>
            
            <!-- <div class="large-12 columns slide" id="slide-2">
                <h1>This is second slide</h1>
            </div> -->

        </div>

css {
    body {
    background: rgba(255,224,130,.5);
}
#section-1 {
    background-size: cover;
    background-attachment: fixed;
}
    .sky {
        width: 100%;
        height: 450px;
        position: absolute;
        top: 0;
        left: 0;
    }
        .dark-1 {
            background: -moz-linear-gradient(rgba(96,125,139,1), rgba(255,255,255,0));
        }
    #stellar-1 {
        position: absolute;
        top: 30%;
        background: rgba(255,255,255, .8);
    }


#section-2 {
    background: -moz-linear-gradient(rgba(255,224,130,0), rgba(255,248,225,1));
    border: 1px solid black;
}

#slide-1 {
    background: rgba(255,255,255,.3);
}
    .plastic {
        float: left;
        position: relative;
        width: 110px;
        height: 170px;
        margin: 1rem;
    }
        .plastic-1 {
            left: 17px;
            background-color: #fff; 
            position: absolute;
            height: 30px;
            width: 50px;
            border-radius: 9px;
        }

        .plastic-2 {
            top: 94px;
            left: 91px;
            background-color: #ffe; 
            position: absolute;
            height: 50px;
            width: 30px;
            border-radius: 17px;
        }

        .plastic-3 {
            position: absolute;
            top: -30px;
            left: 317px;
            background-color: #c3d99a;
            height: 50px;
            width: 50px;
            border-radius: 100px;
        }

#slide-2 {
    background: black
}
}