<?php
  $title = "Карта климатических аномалий";

  include("header.php");
 ?>

    <main class="page-main page-main--publication">
      <canvas id="noise" class="noise"></canvas>

      <section class="top top--publication">
        <div class="top__wrapper top__wrapper--publication">
          <h4 class="brackets brackets--publication">{<span>сервис</span>}</h4>

          <h1 class="top__title top__title--publication">
            Карта климатических аномалий
          </h1>

          <div class="top__iframe">
            <iframe src="https://maps.greenpeace.org/maps/climate_anomalies/" width="1103" height="660" frameborder="0"></iframe>
          </div>

        </div>
      </section>

      <article class="content content--map">
        <p>
          Оттенки красного указывают области, где среднемесячные температуры выше, чем в среднем за период с 1979 по 2000 годы, синим - наоборот ниже среднего.

        </p>
        <p>
          Например, если в июле этого года в московском регионе России вы видите красный цвет, то это значит, что температура выше, чем была в «средний» июль в годы между 1979-м м2000-м.

        </p>
        <p>
          Данные на карте показывают температуру воздуха на высоте 2 метра над поверхностью земли. Температурные аномалии отражают разницу между текущей (или прогнозной) температурой и среднемноголетними (1979-2000 гг.) значениями за тот же период времени (месяц или день).

        </p>
        <hr>

        <p>
          <small>
            Среднемноголетние значения температуры за день и температурные аномалии за месяц получены из данных ERA5 (Copernicus Climate Change Service/ECMWF) доступных с 1979 по настоящее время (3). Месячные аномалии оценивались в сравнении со среднемноголетними значениями 1980-2010 годов, согласно критериям Международной метеорологической организации (WMO). Дневные аномалии* рассчитывались исходя из среднемноголетних значений 1979-2000 годов, этот 22-летний период выбран в качестве "базовой линии", поскольку более точно отражает потепление в северных широтах и особенно в Арктике. Сравнение разных "базовых линий" среднемноголетних значений и исторической температуры показано здесь (5).

          </small>
        </p>
        <p>
          <small>
            Дневные температурные аномалии показывают разницу между прогнозными значениями (GFS) и среднемноголетними (ERA5 reanalysis) и могут отличаться от значений полученных только по данным ERA5. Данные обновляются раз в день, месячные аномалии обновляются один или два раза в месяц.

          </small>
        </p>
        <p>
          <small>
            Источники: ERA5/Copernicus Climate Change Service/ECMWF, NOAA/GFS
            * Среднемноголетние значения за день получены с помощью Google Earth Engine (6)

          </small>
        </p>
        <p>
          <small>
            Источники данных и дополнительная информация

            Суточные данные о глобальной температуре доступны из оперативного архива NOAA Global Forecast System (GFS)(1).
            Прогнозные данные (на 16 дней) обновляются GFS 4 раза в день. Дневные максимумы температуры рассчитываются из восьми 3-х часовых срезов начиная с
            0000 UTC (24 часа). Исходные данные ежедневно скачиваются с NOMADS(2).
          </small>
        </p>
        <p>
          <small>
              Links:
          </small>
        </p>

        <p>
          <small>(1) <a target="_blank" href="https://www.ncdc.noaa.gov/data-access/model-data/model-datasets/global-forcast-system-gfs">https://www.ncdc.noaa.gov/data-access/model-data/model-datasets/global-forcast-system-gfs</a> </small>
        </p>
        <p>
          <small>(2) <a target="_blank" href="https://nomads.ncep.noaa.gov/">https://nomads.ncep.noaa.gov/</a> </small>
        </p>
        <p>
          <small>(3) <a target="_blank" href="https://climate.copernicus.eu/surface-temperature">https://climate.copernicus.eu/surface-temperature</a> </small>
        </p>
        <p>
          <small>(4) <a target="_blank" href="https://climate.copernicus.eu/climate-bulletin-about-data-and-analysis">https://climate.copernicus.eu/climate-bulletin-about-data-and-analysis</a> </small>
        </p>
        <p>
          <small>(5) <a target="_blank" href="https://climatereanalyzer.org/wx/DailySummary/images/GISS_land+ocean_1880-2014.png">https://climatereanalyzer.org/wx/DailySummary/images/GISS_land+ocean_1880-2014.png</a> </small>
        </p>
        <p>
          <small>(6) <a target="_blank" href="https://developers.google.com/earth-engine/datasets/catalog/ECMWF_ERA5_DAILY">https://developers.google.com/earth-engine/datasets/catalog/ECMWF_ERA5_DAILY</a> </small>
        </p>
      </article>
    </main>

<?php
  include("footer.php");
 ?>
