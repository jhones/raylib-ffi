<?php

declare(strict_types=1);

namespace Nawarian\Raylib;

use FFI;
use FFI\CData;

/**
 * @phpcs:disable Generic.Files.LineLength.TooLong
 * @method CData new(string $type)
 * @method void BeginBlendMode(int $mode)
 * @method void BeginDrawing()
 * @method void BeginMode2D(CData $camera2D)
 * @method void BeginMode3D(CData $camera3D)
 * @method void BeginScissorMode(int $x, int $y, int $width, int $height)
 * @method void BeginTextureMode(CData $target)
 * @method bool CheckCollisionBoxes(CData $box1, CData $box2)
 * @method bool CheckCollisionBoxSphere(CData $box, CData $center, float $radius)
 * @method bool CheckCollisionPointRec(CData $point, CData $rec)
 * @method bool CheckCollisionPointCircle(CData $point, CData $center, float $radius)
 * @method bool CheckCollisionRayBox(CData $ray, CData $box)
 * @method bool CheckCollisionRecs(CData $rec1, CData $rec2)
 * @method bool CheckCollisionCircles(CData $center1, float $radius1, CData $center2, float $radius2)
 * @method bool CheckCollisionCircleRec(CData $center, float $radius, CData $rec)
 * @method bool CheckCollisionPointTriangle(CData $point, CData $p1, CData $p2, CData $p3)
 * @method bool CheckCollisionLines(CData $startPos1, CData $endPos1, CData $startPos2, CData $endPos2, CData $mutCollisionPointPointer)
 * @method void ClearBackground(CData $color)
 * @method void ClearWindowState(int $flags)
 * @method void CloseAudioDevice()
 * @method void CloseWindow()
 * @method CData ColorAlpha(CData $color, float $alpha)
 * @method void DrawBillboard(CData $camera, CData $texture, CData $center, float $size, CData $tint)
 * @method void DrawCircle(int $centerX, int $centerY, float $radius, CData $color)
 * @method void DrawCircleGradient(int $centerX, int $centerY, float $radius, CData $color1, CData $color2)
 * @method void DrawCircleLines(int $centerX, int $centerY, float $radius, CData $color)
 * @method void DrawCircleV(CData $center, float $radius, CData $color)
 * @method void DrawCube(CData $position, float $width, float $height, float $length, CData $color)
 * @method void drawCubeV(CData $position, CData $size, CData $color)
 * @method void DrawCubeWires(CData $position, float $width, float $height, float $length, CData $color)
 * @method void DrawFPS(int $posX, int $posY)
 * @method void DrawGrid(int $slices, float $spacing)
 * @method void DrawLine(int $x0, int $y0, int $x1, int $y1, CData $color)
 * @method void DrawLineBezier(CData $startPos, CData $endPos, float $lineThick, CData $color)
 * @method void DrawModelEx(CData $model, CData $position, CData $rotationAxis, float $rotationAngle, CData $scale, CData $tint)
 * @method void DrawPlane(CData $center, CData $size, CData $color)
 * @method void DrawPoly(CData $center, int $sides, float $radius, float $rotation, CData $color)
 * @method void DrawRay(CData $ray, CData $color)
 * @method void DrawRectangle(float $x, float $y, float $width, float $height, CData $color)
 * @method void DrawRectangleGradientH(float $x, float $y, float $width, float $height, CData $color1, CData $color2)
 * @method void DrawRectangleLines(float $x, float $y, float $width, float $height, CData $color)
 * @method void DrawRectangleLinesEx(CData $rectangle, int $lineThick, CData $color)
 * @method void DrawRectanglePro(CData $rectangle, CData $origin, float $rotation, CData $color)
 * @method void DrawRectangleRec(CData $rectangle, CData $color)
 * @method void DrawSphere(CData $centerPos, float $radius, CData $color)
 * @method void DrawSphereWires(CData $centerPos, float $radius, int $rings, int $slices, CData $color)
 * @method void DrawText(string $text, int $x, int $y, int $fontSize, CData $color)
 * @method void DrawTextEx(CData $font, string $text, CData $position, float $fontSize, float $spacing, CData $tint)
 * @method void DrawTextRec(CData $font, string $text, CData $rec, float $fontSize, float $spacing, bool $wordWrap, CData $tint)
 * @method void DrawTextRecEx(CData $font, string $text, CData $rec, float $fontSize, float $spacing, bool $wordWrap, CData $tint, int $selectStart, int $selectLength, CData $selectTint, CData $selectBackTint)
 * @method void DrawTextCodepoint(CData $font, int $codepoint, CData $position, float $fontSize, CData $tint)
 * @method void DrawTexture(CData $texture, int $posX, int $posY, CData $tint)
 * @method void DrawTextureEx(CData $texture, CData $position, float $rotation, float $scale, CData $tint)
 * @method void DrawTexturePro(CData $texture, CData $source, CData $dest, CData $origin, float $rotation, CData $tint)
 * @method void DrawTextureRec(CData $texture, CData $source, CData $position, CData $tint)
 * @method void DrawTextureTiled(CData $texture, CData $source, CData $dest, CData $origin, float $rotation, float $scale, CData $tint)
 * @method void DrawTextureV(CData $texture, CData $position, CData $tint)
 * @method void DrawTriangle(CData $vec1, CData $vec2, CData $vec3, CData $color)
 * @method void DrawTriangleLines(CData $vec1, CData $vec2, CData $vec3, CData $color)
 * @method void EndBlendMode()
 * @method void EndDrawing()
 * @method void EndMode2D()
 * @method void EndMode3D()
 * @method void EndScissorMode()
 * @method void EndTextureMode()
 * @method bool ExportImage(CData $image, string $fileName)
 * @method CData Fade(CData $color, float $alpha)
 * @method CData GenImageCellular(int $width, int $height, int $tileSize)
 * @method CData GenImageChecked(int $width, int $height, int $checksX, int $checksY, CData $col1, CData $col2)
 * @method CData GenImageGradientH(int $width, int $height, CData $left, CData $right)
 * @method CData GenImageGradientRadial(int $width, int $height, float $density, CData $inner, CData $outer)
 * @method CData GenImageGradientV(int $width, int $height, CData $top, CData $bottom)
 * @method CData GenImagePerlinNoise(int $width, int $height, int $offsetX, int $offsetY, float $scale)
 * @method CData GenImageWhiteNoise(int $width, int $height, float $factor)
 * @method string GetClipboardText()
 * @method CData GetColor(int $hex)
 * @method CData GetCollisionRec(CData $rec1, CData $rec2)
 * @method int GetFPS()
 * @method float GetFrameTime()
 * @method int GetGestureDetected()
 * @method int GetKeyPressed()
 * @method int GetCharPressed()
 * @method CData GetMousePosition()
 * @method CData GetMouseRay(CData $mousePosition, CData $camera)
 * @method float GetMouseWheelMove()
 * @method int GetMouseX()
 * @method int GetMouseY()
 * @method float GetMusicTimeLength(CData $music)
 * @method float GetMusicTimePlayed(CData $music)
 * @method int GetRandomValue(int $min, int $max)
 * @method int GetMonitorCount()
 * @method string GetMonitorName(int $monitor)
 * @method CData GetMonitorPosition(int $monitor)
 * @method int GetMonitorWidth(int $monitor)
 * @method int GetMonitorHeight(int $monitor)
 * @method int GetMonitorPhysicalWidth(int $monitor)
 * @method int GetMonitorPhysicalHeight(int $monitor)
 * @method int GetMonitorRefreshRate(int $monitor)
 * @method CData GetWindowPosition()
 * @method CData GetWindowScaleDPI()
 * @method CData GetScreenToWorld2D(CData $position, CData $camera)
 * @method int GetScreenWidth()
 * @method int GetScreenHeight()
 * @method int GetSoundsPlaying()
 * @method CData GetTextureData(CData $texture)
 * @method float GetTime()
 * @method CData GetTouchPosition(int $index)
 * @method CData GetWorldToScreen(CData $position, CData $camera)
 * @method CData GetWorldToScreen2D(CData $position, CData $camera)
 * @method void ImageColorBrightness(CData $image, int $brightness)
 * @method void ImageColorContrast(CData $image, float $contrast)
 * @method void ImageColorGrayscale(CData $image)
 * @method void ImageColorInvert(CData $image)
 * @method void ImageColorTint(CData $image, CData $color)
 * @method void ImageCrop(CData $image, CData $crop)
 * @method void ImageDraw(Cdata $dst,   Cdata $src, CData $srcRec, CData $dstRec, CData $tint)
 * @method void ImageDrawCircle(CData $dst, int $centerX, int $centerY, int $radius, CData $color)
 * @method void ImageDrawPixel(CData $dst, int $posX, int $posY, CData $color)
 * @method void ImageDrawRectangle(CData $dst, int $posX, int $posY, int $width, int $height, CData $color)
 * @method void ImageDrawTextEx(CData $dst, CData $font, string $text, CData $position, float $fontSize, float $spacing, CData $tint)
 * @method void ImageFlipHorizontal(CData $image)
 * @method void ImageFlipVertical(CData $image)
 * @method void ImageFormat(CData $image, int $newFormat)
 * @method void ImageResize(CData $image, int $newWidth, int $newHeight)
 * @method void InitAudioDevice()
 * @method void InitWindow(int $width, int $height, string $title)
 * @method bool IsKeyDown(int $key)
 * @method bool IsKeyPressed(int $key)
 * @method bool IsKeyReleased(int $key)
 * @method bool IsKeyUp(int $key)
 * @method bool IsMouseButtonDown(int $button)
 * @method bool IsMouseButtonPressed(int $button)
 * @method bool IsMouseButtonUp(int $button)
 * @method bool IsMouseButtonReleased(int $button)
 * @method bool IsWindowFocused()
 * @method bool IsWindowFullscreen()
 * @method bool IsWindowHidden()
 * @method bool IsWindowMaximized()
 * @method bool IsWindowMinimized()
 * @method bool IsWindowReady()
 * @method bool IsWindowResized()
 * @method bool IsWindowState(int $flag)
 * @method CData LoadFont(string $fileName)
 * @method CData LoadFontEx(string $fileName, int $fontSize, int $fontChars, int $charsCount)
 * @method CData LoadImageColors(CData $image)
 * @method CData LoadImage(string $filename)
 * @method CData LoadModel(string $filename)
 * @method CData loadModelAnimations(string $filename)
 * @method CData LoadSound(string $filename)
 * @method int LoadStorageValue(int $position)
 * @method CData LoadMusicStream(string $filename)
 * @method CData LoadTexture(string $filename)
 * @method CData LoadTextureFromImage(CData $image)
 * @method CData LoadRenderTexture(int $width, int $height)
 * @method void MaximizeWindow()
 * @method int MeasureText(string $text, int $fontSize)
 * @method void MinimizeWindow()
 * @method void PauseMusicStream(CData $music)
 * @method void PlayMusicStream(CData $music)
 * @method void PlaySound(CData $sound)
 * @method void PlaySoundMulti(CData $sound)
 * @method void ResumeMusicStream(CData $music)
 * @method void RestoreWindow()
 * @method bool SaveStorageValue(int $position, int $value)
 * @method void SetCameraMode(CData $camera, int $mode)
 * @method void SetClipboardText(string $text)
 * @method void SetConfigFlags(int $flags)
 * @method void SetExitKey(int $key)
 * @method void SetMaterialTexture(CData $material, int $mapType, CData $texture)
 * @method void SetMusicPitch(CData $music, float $pitch)
 * @method void SetSoundVolume(CData $sound, float $volume)
 * @method void SetTargetFPS(int $fps)
 * @method void SetTextureFilter(CData $texture, int $filterMode)
 * @method void SetWindowIcon(CData $image)
 * @method void SetWindowMinSize(int $width, int $height)
 * @method void SetWindowMonitor(int $monitor)
 * @method void SetWindowPosition(int $x, int $y)
 * @method void SetWindowSize(int $width, int $height)
 * @method void SetWindowState(int $flags)
 * @method void SetWindowTitle(string $title)
 * @method void ShowCursor()
 * @method void HideCursor()
 * @method bool IsCursorHidden()
 * @method void EnableCursor()
 * @method void DisableCursor()
 * @method bool IsCursorOnScreen()
 * @method void StopMusicStream(CData $music)
 * @method void StopSoundMulti()
 * @method string TextSubtext(string $text, int $position, int $length)
 * @method void UnloadFont(CData $font)
 * @method void ToggleFullscreen()
 * @method void UpdateTexture(CData $texture, CData $pixels);
 * @method void UnloadImage(CData $image)
 * @method void UnloadModel(CData $model)
 * @method void UnloadModelAnimation(CData $animation)
 * @method void UnloadMusicStream(CData $music)
 * @method void UnloadRenderTexture(CData $target)
 * @method void UnloadSound(CData $sound)
 * @method void UnloadTexture(CData $texture)
 * @method void UpdateCamera(CData $camera)
 * @method void UpdateModelAnimation(CData $model, CData $animation, int $frame)
 * @method void UpdateMusicStream(CData $music)
 * @method bool WindowShouldClose()
 */
class RaylibFFIProxy
{
    private FFI $ffi;

    public function __construct(FFI $ffi)
    {
        $this->ffi = $ffi;
    }

    public function __call(string $method, array $args)
    {
        $callable = [$this->ffi, $method];
        return $callable(...$args);
    }
}
